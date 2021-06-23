<?php
namespace WanaKin\MP\Tests;

class MPHelperSqrtTest extends TestCase
{
    /**
     * Test square roots
     *
     * @return void
     */
    public function test_square_roots()
    {
        // Set the scale
        $this->mp->setScale(2);

        // Test square roots
        $this->assertEquals('1.41', $this->mp->sqrt('2'));
        $this->assertEquals('5.00', $this->mp->sqrt('25'));
    }
}
