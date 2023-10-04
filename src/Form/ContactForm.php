<?php
// in src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Mailer;

class ContactForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('phone', ['type'=>'char'])
            ->addField('message', ['type' => 'text']);

    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->requirePresence('name')
            ->notEmptyString('name', 'We need your name.')
            ->minLength('name', 2)

            ->requirePresence('email')
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => 'E-mail must be valid'
            ])

            ->requirePresence('phone') // Add phone field validation
            ->notEmptyString('phone', 'Phone number is required.')
            ->add('phone', 'validFormat', [
                //Validate Valid Australian Phone Number
                'rule' => '^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$',
                'message' => 'Phone number must be a valid Australian number.'
            ])

            ->requirePresence('message')
            ->notEmptyString('message', 'You need to give a comment.');

        return $validator;
    }

    protected function _execute(array $data): bool
    {
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
                ->setTransport('smtp')
                ->setFrom(['superiorfitness[at]zohomail.com.au' => 'Superior Fitness Contact Enquiry'])
                ->setTo('mackenziefletcher@hotmail.com')
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
        return true;
    }
}
