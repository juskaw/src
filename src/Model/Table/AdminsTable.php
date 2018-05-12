<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Admins Model
 *
 * @property \App\Model\Table\AdminsTable|\Cake\ORM\Association\BelongsTo $Admins
 * @property \App\Model\Table\AdminsTable|\Cake\ORM\Association\HasMany $Admins
 *
 * @method \App\Model\Entity\Admin get($primaryKey, $options = [])
 * @method \App\Model\Entity\Admin newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Admin[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Admin|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Admin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Admin[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Admin findOrCreate($search, callable $callback = null, $options = [])
 */
class AdminsTable extends Table
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

        $this->setTable('admins');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Admins', [
            'foreignKey' => 'admin_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Admins', [
            'foreignKey' => 'admin_id'
        ]);
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
            ->scalar('plate number')
            ->maxLength('plate number', 225)
            ->requirePresence('plate number', 'create')
            ->notEmpty('plate number');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

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
        $rules->add($rules->existsIn(['admin_id'], 'Admins'));

        return $rules;
    }
}
