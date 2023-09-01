<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'product_name' => 'Lorem ipsum dolor sit amet',
                'product_cost' => 1.5,
                'inventory_amount' => 1,
            ],
        ];
        parent::init();
    }
}
