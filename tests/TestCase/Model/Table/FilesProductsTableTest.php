<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilesProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilesProductsTable Test Case
 */
class FilesProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FilesProductsTable
     */
    public $FilesProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FilesProducts',
        'app.Products',
        'app.Files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FilesProducts') ? [] : ['className' => FilesProductsTable::class];
        $this->FilesProducts = TableRegistry::getTableLocator()->get('FilesProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FilesProducts);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
