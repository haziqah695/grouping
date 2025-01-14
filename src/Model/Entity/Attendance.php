<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendance Entity
 *
 * @property int $attendance_id
 * @property string $program_name
 * @property string $program_day
 * @property \Cake\I18n\DateTime $program_date
 * @property string $student_name
 * @property int $student_id
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Student $student
 */
class Attendance extends Entity
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
    protected array $_accessible = [
        'program_name' => true,
        'program_day' => true,
        'program_date' => true,
        'student_name' => true,
        'student_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'student' => true,
    ];
}
