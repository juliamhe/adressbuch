<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adressbuch Model
 *
 * @method \App\Model\Entity\Adressbuch newEmptyEntity()
 * @method \App\Model\Entity\Adressbuch newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Adressbuch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adressbuch get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adressbuch findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Adressbuch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adressbuch[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adressbuch|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adressbuch saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adressbuch[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Adressbuch[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Adressbuch[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Adressbuch[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AdressbuchTable extends Table
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

        $this->setTable('adressbuch');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 255)
            ->requirePresence('adresse', 'create')
            ->notEmptyString('adresse');

        $validator
            ->integer('telefonnummer')
            ->requirePresence('telefonnummer', 'create')
            ->notEmptyString('telefonnummer');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->date('geburtstag')
            ->allowEmptyDate('geburtstag');

        return $validator;
    }
}
