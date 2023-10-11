<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index','about','contact','home','carts']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Orders'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {

            $productData = $this->request->getData();  // Get all posted data

            // Handle file upload
            $image = $this->request->getData('product_image_path');  // Get the file object

            if ($image && $image->getSize() > 0 && $image->getError() === UPLOAD_ERR_OK) {
                // Generate a filename, usually depending on timestamp and original filename
                $fileName = time() . $image->getClientFilename();

                // Define the target path for the uploaded file
                $targetPath = WWW_ROOT . 'img/' . $fileName;

                // Attempt to move the uploaded file to the target path
                $image->moveTo($targetPath);

                // Update the product data with the filename, to be saved in the database
                $productData['product_image_path'] = $fileName;
            } else {
                $this->Flash->error(__('Image upload failed. Please, try again.'));
            }

            // Patch the entity and attempt to save.
            $product = $this->Products->patchEntity($product, $productData);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $orders = $this->Products->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Orders'],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $productData = $this->request->getData();

            // Handling image upload
            $image = $this->request->getData('product_image_path');

            if ($image && $image->getSize() > 0 && $image->getError() === UPLOAD_ERR_OK) {
                // Generate filename based on timestamp and original name
                $filename = time() . $image->getClientFilename();
                // Define path
                $filepath = 'img/' . $filename;
                // Move to destination
                $image->moveTo(WWW_ROOT . $filepath);
                // Update path in entity data
                $productData['product_image_path'] = $filename;

                // If there was an old image, delete it
                if ($product->product_image_path && file_exists(WWW_ROOT . 'img/' . $product->product_image_path)) {
                    unlink(WWW_ROOT . 'img/' . $product->product_image_path);
                }
            }

            $product = $this->Products->patchEntity($product, $productData);

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $orders = $this->Products->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'orders'));
    }
    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);

        // Deleting associated image file
        if ($product->product_image_path && file_exists(WWW_ROOT . $product->product_image_path)) {
            unlink(WWW_ROOT . $product->product_image_path);
        }

        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
