<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CartsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('carts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('timestamp');
        $this->belongsTo('products', [
            'foreignKey' => 'product_id',
        ]);
    }
}
