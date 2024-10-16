<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Savings Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Saving newEmptyEntity()
 * @method \App\Model\Entity\Saving newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Saving> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Saving get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Saving findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Saving patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Saving> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Saving|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Saving saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Saving>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Saving>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Saving>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Saving> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Saving>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Saving>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Saving>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Saving> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SavingsTable extends Table
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

        $this->setTable('savings');
        $this->setDisplayField('status');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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
            ->integer('nominal')
            ->requirePresence('nominal', 'create')
            ->notEmptyString('nominal');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
