<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DuanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DuanTable Test Case
 */
class DuanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DuanTable
     */
    protected $Duan;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Duan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Duan') ? [] : ['className' => DuanTable::class];
        $this->Duan = $this->getTableLocator()->get('Duan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Duan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DuanTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
