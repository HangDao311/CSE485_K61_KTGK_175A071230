<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Duan Model
 *
 * @method \App\Model\Entity\Duan newEmptyEntity()
 * @method \App\Model\Entity\Duan newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Duan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Duan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Duan findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Duan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Duan[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Duan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Duan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Duan[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Duan[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Duan[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Duan[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DuanTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('duan');
        $this->setDisplayField('maduan');
        $this->setPrimaryKey('maduan');
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
            ->integer('maduan')
            ->allowEmptyString('maduan', null, 'create');

        $validator
            ->scalar('tenduan')
            ->maxLength('tenduan', 100)
            ->allowEmptyString('tenduan');

        $validator
            ->integer('namthuchien')
            ->allowEmptyString('namthuchien');

        $validator
            ->scalar('linhvuc')
            ->maxLength('linhvuc', 100)
            ->allowEmptyString('linhvuc');

        $validator
            ->scalar('nhiemvu')
            ->allowEmptyString('nhiemvu');

        $validator
            ->scalar('coquanthuchien')
            ->allowEmptyString('coquanthuchien');

        return $validator;
    }
}
