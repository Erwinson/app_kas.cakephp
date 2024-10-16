<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SavingsFixture
 */
class SavingsFixture extends TestFixture
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
                'nominal' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-09-18 08:06:05',
                'modified' => '2024-09-18 08:06:05',
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
