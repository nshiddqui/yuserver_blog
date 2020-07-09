<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlogContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogContentsTable Test Case
 */
class BlogContentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BlogContentsTable
     */
    public $BlogContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BlogContents',
        'app.Blogs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BlogContents') ? [] : ['className' => BlogContentsTable::class];
        $this->BlogContents = TableRegistry::getTableLocator()->get('BlogContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlogContents);

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
