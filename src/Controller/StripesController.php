<?php
//TODO Make this add an order to the db
namespace App\Controller;
use Cake\Mailer\Mailer;
use Stripe;

class StripesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['stripe', 'payment']);
    }
    public function stripe()
    {
        $this->set("title", "Stripe Payment Gateway Integration");
    }

    public function payment()
    {
        //Handle Payment
        require_once VENDOR_PATH. '/stripe/stripe-php/init.php';

        Stripe\Stripe::setApiKey(STRIPE_SECRET);
        $stripe = Stripe\Charge::create ([
            "amount" => 70 * 100,
            "currency" => "usd",
            "source" => $_REQUEST["stripeToken"],
            "description" => "Test payment via Stripe From onlinewebtutorblog.com"
        ]);

        //Handle Email
        $mailer = new Mailer('default');
        $mailer
            ->setViewVars([
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'address2' => $_POST['address2'],
                'country' => $_POST['country'],
                'state' => $_POST['state'],
                'postcode' => $_POST['postcode'],
            ])
            ->setTransport('smtp')
            ->setFrom(['superiorfitness[at]zohomail.com.au' => 'Superior Fitness Contact Enquiry'])
            ->setTo('superiorfitness@zohomail.com.au')
            ->setEmailFormat('html')
            ->setSubject('New Contact Enquiry')
            ->viewBuilder()
            ->setTemplate('contact');
        $mailer->deliver();

        // after successfull payment, you can store payment related information into your database
        $this->Flash->success(__('Payment done successfully'));

        return $this->redirect(['action' => 'stripe']);
    }
}
