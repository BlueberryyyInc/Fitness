<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdersProducts Model
 *
 * @method \App\Model\Entity\OrdersProduct newEmptyEntity()
 * @method \App\Model\Entity\OrdersProduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdersProduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrdersProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdersProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdersProduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrdersProduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrdersProduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrdersProduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrdersProductsTable extends Table
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

        $this->setTable('orders_products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('order_ID')
            ->requirePresence('order_ID', 'create')
            ->notEmptyString('order_ID');

        $validator
            ->integer('product_ID')
            ->requirePresence('product_ID', 'create')
            ->notEmptyString('product_ID');

        $validator
            ->integer('order_product_amount')
            ->requirePresence('order_product_amount', 'create')
            ->notEmptyString('order_product_amount');

        return $validator;
    }
}
