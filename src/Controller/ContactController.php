<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Form\ContactForm;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;

class ContactController extends AppController{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index', 'send']);
    }

    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index','products','repair','about']);
    }
    public function index(){
        $this->layout='mylayout';

        $contact = new ContactForm();
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->getData())) {
                $this->Flash->success('We will get back to you soon.');
            } else {
                $this->Flash->error('There was a problem submitting your form.');
            }
        }
        $this->set('contact', $contact);
    }

    public function send() {
        if($this->request->is('post')) {
            $name = $this->request->getData('name');
            $email = $this->request->getData('email');
            $phone = $this->request->getData('phone');
            $message = $this->request->getData('message');


            $mailer = new Mailer('default');
            $mailer
                ->setViewVars([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'message' => $message,
                ])
                ->setTransport('default')
                ->setFrom(['superiorfitness@zohomail.com.au' => 'Superior Fitness Contact Enquiry'])
                ->setTo('superiorfitness@zohomail.com.au')
                ->setEmailFormat('html')
                ->setSubject('New Contact Enquiry')
                ->viewBuilder()
                ->setTemplate('contact');
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
