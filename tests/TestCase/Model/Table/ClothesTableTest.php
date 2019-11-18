<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClothesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClothesTable Test Case
 */
class ClothesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClothesTable
     */
    public $Clothes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Clothes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Clothes') ? [] : ['className' => ClothesTable::class];
        $this->Clothes = TableRegistry::getTableLocator()->get('Clothes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clothes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
