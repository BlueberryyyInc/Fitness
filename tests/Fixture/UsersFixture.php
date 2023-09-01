<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'user_name' => 'Lorem ipsum dolor sit amet',
                'user_email' => 'Lorem ipsum dolor sit amet',
                'user_phone' => 'Lorem ip',
                'user_emp_role' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
