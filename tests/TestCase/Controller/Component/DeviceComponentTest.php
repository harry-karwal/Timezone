<?php
namespace Timezone\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use Timezone\Controller\Component\DeviceComponent;

/**
 * Timezone\Controller\Component\DeviceComponent Test Case
 */
class DeviceComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Timezone\Controller\Component\DeviceComponent
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
        $registry = new ComponentRegistry();
        $this->Device = new DeviceComponent($registry);
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
