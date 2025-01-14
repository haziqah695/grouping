<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgramsFixture
 */
class ProgramsFixture extends TestFixture
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
                'program_id' => 1,
                'program_name' => 'Lorem ipsum dolor sit amet',
                'program_day' => 'Lorem ipsum dolor ',
                'program_date' => 'Lore',
                'program_time' => '',
                'faculty_course' => 'Lorem ipsum dolor sit amet',
                'faculty_name' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '',
                'modified' => '',
            ],
        ];
        parent::init();
    }
}
