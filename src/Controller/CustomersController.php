<?php
namespace App\Controller;
use App\Controller\AppController;
class CustomersController extends AppController{

    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index','products','contact','about']);
    }
    public function index(){
        $this->layout='mylayout';
    }
}
?>
