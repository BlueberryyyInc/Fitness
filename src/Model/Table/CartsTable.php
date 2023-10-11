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
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
        ]);
    }
}