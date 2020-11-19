<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdressbuchTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdressbuchTable Test Case
 */
class AdressbuchTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdressbuchTable
     */
    protected $Adressbuch;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Adressbuch',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Adressbuch') ? [] : ['className' => AdressbuchTable::class];
        $this->Adressbuch = $this->getTableLocator()->get('Adressbuch', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Adressbuch);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
