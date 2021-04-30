<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donations Model
 *
 * @property \App\Model\Table\TransactionsTable&\Cake\ORM\Association\BelongsTo $Transactions
 *
 * @method \App\Model\Entity\Donation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Donation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DonationsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('donations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmptyString('id', null, 'create');

        $validator
                ->scalar('full_name')
                ->maxLength('full_name', 255)
                ->allowEmptyString('full_name');

        $validator
                ->email('email')
                ->allowEmptyString('email');

        $validator
                ->scalar('amount')
                ->maxLength('amount', 255)
                ->requirePresence('amount', 'create')
                ->notEmptyString('amount');

        $validator
                ->scalar('status')
                ->maxLength('status', 255)
                ->allowEmptyString('status');

        $validator
                ->scalar('payment_amount')
                ->maxLength('payment_amount', 255)
                ->allowEmptyString('payment_amount');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {

        return $rules;
    }

}
