<?php
namespace Timezone\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Timezone\View\Helper\DeviceHelper;

/**
 * Timezone\View\Helper\DeviceHelper Test Case
 */
class DeviceHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Timezone\View\Helper\DeviceHelper
     */
    public $Device;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Device = new DeviceHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Device);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
