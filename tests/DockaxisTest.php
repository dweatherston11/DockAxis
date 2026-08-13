<?php
/**
 * Tests for DockAxis
 */

use PHPUnit\Framework\TestCase;
use Dockaxis\Dockaxis;

class DockaxisTest extends TestCase {
    private Dockaxis $instance;

    protected function setUp(): void {
        $this->instance = new Dockaxis(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dockaxis::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
