<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersProductsTable Test Case
 */
class OrdersProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersProductsTable
     */
    public $OrdersProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrdersProducts',
        'app.Orders',
        'app.Products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrdersProducts') ? [] : ['className' => OrdersProductsTable::class];
        $this->OrdersProducts = TableRegistry::getTableLocator()->get('OrdersProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersProducts);

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
