<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    public function beforeSave(\Cake\Event\EventInterface $event, \Cake\Datasource\EntityInterface $entity, \ArrayObject $options)
    {
        if ($entity->isDirty('password')) {
            $entity->set('password', (new DefaultPasswordHasher)->hash($entity->get('password')));
        }
        return true;
    }


    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('user_name',"test123")
            ->maxLength('user_name', 64, "test123")
            ->requirePresence('user_name', 'create', "test123")
            ->notEmptyString('user_name', "test123");

        $validator
            ->scalar('user_email', "test123")
            ->maxLength('user_email', 64, "test123")
            ->requirePresence('user_email', 'create', "test123")
            ->notEmptyString('user_email', "test123")
            ->email('user_email',false, "Please enter a valid email");

        $validator
            ->scalar('user_phone', "test123")
            ->maxLength('user_phone', 10, "test123")
            ->allowEmptyString('user_phone', "test123");

        $validator
            ->scalar('user_emp_role', "test123")
            ->maxLength('user_emp_role', 64, "test123")
            ->allowEmptyString('user_emp_role', "test123");

        $validator
            ->integer('nonce', "test123")
            ->requirePresence('nonce', 'create', "test123")
            ->notEmptyString('nonce', "test123");

        $validator
            ->dateTime('nonce_expiry', )
            ->requirePresence('nonce_expiry', 'create', "test123")
            ->notEmptyDateTime('nonce_expiry', "test123");

        $validator
            ->scalar('password')
            ->maxLength('password', 128, "Please use a shorter password")
            ->minLength('password',3,"Please use a longer password")
            ->requirePresence('password', 'create', "test123")
            ->notEmptyString('password', "test123");

        return $validator;
    }
}
