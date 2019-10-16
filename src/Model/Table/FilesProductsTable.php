<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FilesProducts Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\FilesTable&\Cake\ORM\Association\BelongsTo $Files
 *
 * @method \App\Model\Entity\FilesProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\FilesProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FilesProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FilesProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilesProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilesProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FilesProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FilesProduct findOrCreate($search, callable $callback = null, $options = [])
 */
class FilesProductsTable extends Table
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

        $this->setTable('files_products');
        $this->setDisplayField('product_id');
        $this->setPrimaryKey(['product_id', 'file_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Files', [
            'foreignKey' => 'file_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['file_id'], 'Files'));

        return $rules;
    }
}
