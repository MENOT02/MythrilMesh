<?php
/**
 * Tests for MythrilMesh
 */

use PHPUnit\Framework\TestCase;
use Mythrilmesh\Mythrilmesh;

class MythrilmeshTest extends TestCase {
    private Mythrilmesh $instance;

    protected function setUp(): void {
        $this->instance = new Mythrilmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mythrilmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
