<?php
    namespace App\Controller;
    use App\Controller\AppController;
    class CustomersController extends AppController{
        public function index(){
             $this->layout='mylayout';
        }
    }
?>