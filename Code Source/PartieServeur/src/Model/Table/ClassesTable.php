<?php
namespace App\Model\Table;

use App\Model\Entity\Classe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classes Model
 *
 */
class ClassesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('classes');
        $this->displayField('v_id_classe');
        $this->primaryKey('v_id_classe');
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
            ->allowEmpty('v_id_classe', 'create');
            
        $validator
            ->requirePresence('v_libelle', 'create')
            ->notEmpty('v_libelle');
            
        $validator
            ->requirePresence('v_statut', 'create')
            ->notEmpty('v_statut');

        return $validator;
    }
}
