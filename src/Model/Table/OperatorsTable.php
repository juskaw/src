<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Operators Model
 *
 * @method \App\Model\Entity\Operator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Operator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Operator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Operator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Operator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Operator findOrCreate($search, callable $callback = null, $options = [])
 */
class OperatorsTable extends Table
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

        $this->setTable('operators');
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
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->scalar('platenumber')
            ->maxLength('platenumber', 25)
            ->requirePresence('platenumber', 'create')
            ->notEmpty('platenumber');

        return $validator;
    }
}
