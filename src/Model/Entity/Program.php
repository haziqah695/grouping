<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Program Entity
 *
 * @property int $program_id
 * @property string $program_name
 * @property string $program_day
 * @property string $program_date
 * @property \Cake\I18n\DateTime $program_time
 * @property string $faculty_course
 * @property string $faculty_name
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Program extends Entity
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
        'program_time' => true,
        'faculty_course' => true,
        'faculty_name' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}
