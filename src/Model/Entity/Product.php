<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $product_name
 * @property string $product_cost
 * @property int $inventory_amount
 *
 * @property \App\Model\Entity\Order[] $orders
 */
class Product extends Entity
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
        'product_name' => true,
        'product_cost' => true,
        'inventory_amount' => true,
        'product_description' => true,
        'product_category' => true,
        'product_brand' => true,
        'product_image_path' => true,
        'orders' => true,
    ];
}
