<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Owners Model
 *
 * @method \App\Model\Entity\Owner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Owner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Owner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Owner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Owner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Owner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Owner findOrCreate($search, callable $callback = null, $options = [])
 */
class OwnersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('owners');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 225)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 225)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('fname')
            ->maxLength('fname', 225)
            ->requirePresence('fname', 'create')
            ->notEmpty('fname');

        $validator
            ->scalar('lname')
            ->maxLength('lname', 225)
            ->requirePresence('lname', 'create')
            ->notEmpty('lname');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->scalar('platenumber')
            ->maxLength('platenumber', 225)
            ->requirePresence('platenumber', 'create')
            ->notEmpty('platenumber');

        $validator
            ->scalar('quatity')
            ->maxLength('quatity', 225)
            ->requirePresence('quatity', 'create')
            ->notEmpty('quatity');

        $validator
            ->integer('id_owners')
            ->requirePresence('id_owners', 'create')
            ->notEmpty('id_owners');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
