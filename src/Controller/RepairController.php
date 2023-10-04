<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Mailer\Mailer;

class RepairController extends AppController{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index', 'send']);
    }
    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index','products','contact','about']);
    }
    public function index(){
        $this->layout='mylayout';
    }

    public function send() {
        if($this->request->is('post')) {
            //Retrieve Form Data
            $name = $this->request->getData('name');
            $email = $this->request->getData('email');
            $phone = $this->request->getData('phone');
            $productNumber = $this->request->getData('productNumber');
            $order = $this->request->getData('order');
            $message = $this->request->getData('message');

            $mailer = new Mailer('default');
            $mailer
                ->setViewVars([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'order' => $order,
                    'productNumber' => $productNumber,
                    'message' => $message,
                ])
                ->setTransport('default')
                ->setFrom(['superiorfitness@zohomail.com.au' => 'Superior Fitness Repair Enquiry'])
                ->setTo('superiorfitness@zohomail.com.au')
                ->setEmailFormat('html')
                ->setSubject('New Repair Enquiry')
                ->viewBuilder()
                ->setTemplate('repair');
            $mailer->deliver();

            if ($this->Flash->success) {
                $this->Flash->success(__('Your message has been sent.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Email failed, please try again.'));
            }
        }
        $this->viewBuilder()->setTemplate('index');
        // Return null at the end of the action
        return null;
    }
}
?>
