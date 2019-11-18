<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdressesFixture
 */
class AdressesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'categories_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'subcategories_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'city' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'categories_id' => ['type' => 'index', 'columns' => ['categories_id'], 'length' => []],
            'subcategories_id' => ['type' => 'index', 'columns' => ['subcategories_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'adresses_ibfk_1' => ['type' => 'foreign', 'columns' => ['categories_id'], 'references' => ['categories', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'adresses_ibfk_2' => ['type' => 'foreign', 'columns' => ['subcategories_id'], 'references' => ['subcategories', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'categories_id' => 1,
                'subcategories_id' => 1,
                'city' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
