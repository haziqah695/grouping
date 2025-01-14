<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attendances Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Attendance newEmptyEntity()
 * @method \App\Model\Entity\Attendance newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Attendance> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Attendance get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Attendance findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Attendance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Attendance> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Attendance|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Attendance saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Attendance>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendance>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Attendance>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendance> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Attendance>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendance>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Attendance>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Attendance> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AttendancesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('attendances');
        $this->setDisplayField('program_name');
        $this->setPrimaryKey('attendance_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER',
        ]);
		$this->addBehavior('AuditStash.AuditLog');
		$this->addBehavior('Search.Search');
		$this->searchManager()
			->value('id')
				->add('search', 'Search.Like', [
					//'before' => true,
					//'after' => true,
					'fieldMode' => 'OR',
					'multiValue' => true,
					'multiValueSeparator' => '|',
					'comparison' => 'LIKE',
					'wildcardAny' => '*',
					'wildcardOne' => '?',
					'fields' => ['id'],
				]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('program_name')
            ->maxLength('program_name', 255)
            ->requirePresence('program_name', 'create')
            ->notEmptyString('program_name');

        $validator
            ->scalar('program_day')
            ->maxLength('program_day', 255)
            ->requirePresence('program_day', 'create')
            ->notEmptyString('program_day');

        $validator
            ->dateTime('program_date')
            ->requirePresence('program_date', 'create')
            ->notEmptyDateTime('program_date');

        $validator
            ->scalar('student_name')
            ->maxLength('student_name', 255)
            ->requirePresence('student_name', 'create')
            ->notEmptyString('student_name');

        $validator
            ->integer('student_id')
            ->notEmptyString('student_id');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['student_id'], 'Students'), ['errorField' => 'student_id']);

        return $rules;
    }
}
