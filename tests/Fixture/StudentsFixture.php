<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'student_id' => 1,
                'student_name' => 'Lorem ipsum dolor sit amet',
                'student_email' => 'Lorem ipsum dolor sit amet',
                'student_phone' => 1,
                'status' => 1,
                'created' => '',
                'modified' => '',
            ],
        ];
        parent::init();
    }
}
