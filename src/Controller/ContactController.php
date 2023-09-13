<?php
namespace App\Controller;
use App\Controller\AppController;
class ContactController extends AppController{
    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index','products','about']);
    }
    public function index(){
        $this->layout='mylayout';
    }
}
?>
