<?php
    namespace App\Controller;
    use App\Controller\AppController;
    use \App\Model\Table\ProductsTable;
    use App\Model\Entity\Product;

    class BuyProductsController extends AppController{
        public function initialize(): void
        {
            parent::initialize();
            $this->Authentication->allowUnauthenticated(['index','products','contact','about']);
        }
        public function index(){
             $this->layout='mylayout';
             $this->loadModel('Products');
             $products = $this->Products->find('all');
             $this->set(compact('products'));

        }
    }
?>
