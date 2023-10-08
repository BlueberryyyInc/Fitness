<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * @property \App\Model\Table\CartsTable $Carts
 */
class CartsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
       {
           parent::beforeFilter($event);
           $this->Authentication->addUnauthenticatedActions(['updateQuantity','stripe', 'payment','carts','index','about','products','contact','home','add','delete','remove','post']);
       }

    public function index()
    {
        $this->layout='mylayout';
        $carts = $this->Carts->find('all', [
            'contain' => ['products']
        ]);
        // calculate total
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->product->product_cost * $cart->quantity;
        }
        $this->set(compact('carts', 'total'));
    }

    /*
     * add cart item to session
     */
    public function add()
    {
        $this->request->allowMethod(['ajax', 'post']);

        $data = $this->request->getData();

        // Look for whether this product is already in the cart
        $existingCart = $this->Carts->find()
            ->where([
                'product_id' => $data['product_id']
            ])
            ->first();

        // If the product is already there, we will update the quantity
        if ($existingCart) {
            $existingCart->quantity += $data['quantity'];
            $cart = $existingCart;
        } else {
            // If not, we will create a new item
            $cart = $this->Carts->newEmptyEntity();
            $cart = $this->Carts->patchEntity($cart, $data);
        }

        if ($this->Carts->save($cart)) {
            $response = ['success' => true, 'message' => __('The product has been added to the cart.')];
        } else {
            $response = ['success' => false, 'message' => __('Unable to add the product to the cart. Please try again.')];
        }

        $this->set(['data' => $response]);
        $this->viewBuilder()->setOption('serialize', ['data']);
        $this->RequestHandler->renderAs($this, 'json');
    }

    public function delete($id = null): ?\Cake\Http\Response
    {
        $cart = $this->Carts->get($id);

        if ($this->Carts->delete($cart)) {
            $this->Flash->success(__('The cart item with id: {0} has been deleted.', h($id)));
        } else {
            $this->Flash->error(__('The cart item with id: {0} could not be deleted. Please, try again.', h($id)));
        }

        return $this->redirect($this->referer());
    }

    public function updateQuantity($id = null): ?\Cake\Http\Response
    {
        $this->request->allowMethod(['post']);

        $cart = $this->Carts->get($id);
        $cart = $this->Carts->patchEntity($cart, $this->request->getData());

        if ($this->Carts->save($cart)) {
            $this->Flash->success(__('Quantity updated successfully.'));
        } else {
            $this->Flash->error(__('Unable to update quantity. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
}
?>
