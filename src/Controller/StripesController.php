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
        // Handle Payment
        require_once VENDOR_PATH . '/stripe/stripe-php/init.php';

        Stripe\Stripe::setApiKey(STRIPE_SECRET);

        // Create a Stripe customer and store the customer ID
        $customer = \Stripe\Customer::create(array(
            "source" => $_REQUEST["stripeToken"],
            "description" => "Basic customer"
        ));

        // Use the customer ID to create a charge
        $stripe = Stripe\Charge::create([
            "amount" => 30 * 100,
            "currency" => "aud",
            "customer" => $customer->id, // Use the customer ID here
            "description" => "10kg Barbell"
        ]);


        //Get Data
        $firstName = $this->request->getData('firstName');
        $lastName = $this->request->getData('lastName');
        $phone = $this->request->getData('phone');
        $email = $this->request->getData('email');
        $address = $this->request->getData('address');
        $address2 = $this->request->getData('address2');
        $state = $this->request->getData('state');
        $postcode = $this->request->getData('postcode');


        //Handle Email
        $mailer = new Mailer('default');
        $mailer
            ->setViewVars([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'address2' => $address2,
                'country' => 'Australia',
                'state' => $state,
                'postcode' => $postcode,
                'product' => '10Kg Barbell',
            ])
            ->setTransport('default')
            ->setFrom(['superiorfitness@zohomail.com.au' => 'Superior Fitness Purchase'])
            ->setTo('superiorfitness@zohomail.com.au')
            ->setEmailFormat('html')
            ->setSubject('New Purchase')
            ->viewBuilder()
            ->setTemplate('order');
        $mailer->deliver();

        // after successfull payment, you can store payment related information into your database
        $this->Flash->success(__('Payment done successfully'));

        return $this->redirect(['action' => 'stripe']);
    }
}
