<?php
namespace App\Controller;
use App\Controller\AppController;

class TCController extends AppController{

    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index','about', 'tc', 'privacy']);
    }

    public function index(){
        $this->layout='mylayout';
    }
}
?>
<?php
