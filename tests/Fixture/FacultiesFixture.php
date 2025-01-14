<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacultiesFixture
 */
class FacultiesFixture extends TestFixture
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
                'faculty_id' => 1,
                'faculty_name' => 'Lorem ipsum dolor sit amet',
                'faculty_course' => 'Lorem ipsum dolor sit amet',
                'program_name' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '',
                'modified' => '',
            ],
        ];
        parent::init();
    }
}
