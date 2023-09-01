<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdersProduct Entity
 *
 * @property int $id
 * @property int $order_ID
 * @property int $product_ID
 * @property int $order_product_amount
 */
class OrdersProduct extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'order_ID' => true,
        'product_ID' => true,
        'order_product_amount' => true,
    ];
}
