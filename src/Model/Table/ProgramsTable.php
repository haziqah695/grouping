<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programs Model
 *
 * @method \App\Model\Entity\Program newEmptyEntity()
 * @method \App\Model\Entity\Program newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Program> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Program get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Program findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Program patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Program> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Program|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Program saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Program>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Program>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Program>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Program> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Program>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Program>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Program>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Program> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProgramsTable extends Table
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

        $this->setTable('programs');
        $this->setDisplayField('program_name');
        $this->setPrimaryKey('program_id');

        $this->addBehavior('Timestamp');
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
            ->maxLength('program_day', 20)
            ->requirePresence('program_day', 'create')
            ->notEmptyString('program_day');

        $validator
            ->scalar('program_date')
            ->maxLength('program_date', 6)
            ->requirePresence('program_date', 'create')
            ->notEmptyString('program_date');

        $validator
            ->dateTime('program_time')
            ->requirePresence('program_time', 'create')
            ->notEmptyDateTime('program_time');

        $validator
            ->scalar('faculty_course')
            ->maxLength('faculty_course', 255)
            ->requirePresence('faculty_course', 'create')
            ->notEmptyString('faculty_course');

        $validator
            ->scalar('faculty_name')
            ->maxLength('faculty_name', 255)
            ->requirePresence('faculty_name', 'create')
            ->notEmptyString('faculty_name');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }
}
