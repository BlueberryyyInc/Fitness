<?php
declare(strict_types=1);

namespace App\Controller;


/**
 * @property \App\Model\Table\CartsTable $Carts
 */
class CartsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index', 'products', 'contact', 'about']);
    }

    public function index()
    {
        $this->layout='mylayout';
        $carts = $this->Carts->find('all', [
            'conditions' => ['user_id' => 4],
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
        $data['user_id'] = 4; // 注意避免硬编码

        // 查找是否已经有这个产品在购物车中
        $existingCart = $this->Carts->find()
            ->where([
                'user_id' => $data['user_id'],
                'product_id' => $data['product_id']
            ])
            ->first();

        // 如果已经有这个产品，我们将更新数量
        if ($existingCart) {
            $existingCart->quantity += $data['quantity'];
            $cart = $existingCart;
        } else {
            // 如果没有，我们将创建一个新的项
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
