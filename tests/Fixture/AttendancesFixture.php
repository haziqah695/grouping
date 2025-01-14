<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AttendancesFixture
 */
class AttendancesFixture extends TestFixture
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
                'attendance_id' => 1,
                'program_name' => 'Lorem ipsum dolor sit amet',
                'program_day' => 'Lorem ipsum dolor sit amet',
                'program_date' => '',
                'student_name' => 'Lorem ipsum dolor sit amet',
                'student_id' => 1,
                'status' => 1,
                'created' => '',
                'modified' => '',
            ],
        ];
        parent::init();
    }
}
