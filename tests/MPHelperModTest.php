<?php
namespace WanaKin\MP\Tests;

class MPHelperModTest extends TestCase
{
    /**
     * Calculate the modulus of two numbers
     *
     * @return void
     */
    public function test_mod()
    {
        // Set the scale
        $this->mp->setScale(2);

        // Tests
        $this->assertEquals('0.00', $this->mp->mod('10', '2'));
        $this->assertEquals('1.50', $this->mp->mod('15.5', '2'));
        $this->assertEquals('3.33', $this->mp->mod('23.33', '4'));
    }
}
