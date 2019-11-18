<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdresseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdresseTable Test Case
 */
class AdresseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdresseTable
     */
    public $Adresse;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Adresse',
        'app.Categories',
        'app.Subcategories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Adresse') ? [] : ['className' => AdresseTable::class];
        $this->Adresse = TableRegistry::getTableLocator()->get('Adresse', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adresse);

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
