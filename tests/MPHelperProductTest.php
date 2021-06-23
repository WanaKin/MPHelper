<?php
namespace WanaKin\MP\Tests;

class MPHelperProductTest extends TestCase
{
    /**
     * Test multiplying two numbers
     *
     * @return void
     */
    public function test_multiplying_a_pair_of_numbers()
    {
        // Set the default scale
        $this->mp->setScale(0);

        $this->assertEquals('100', $this->mp->multiply('50', '2'));
        $this->assertEquals('50', $this->mp->multiply('10', '5'));
    }

    /**
     * Test multiplying three numbers
     *
     * @return void
     */
    public function test_multiplying_three_numbers()
    {
        // Set the default scale
        $this->mp->setScale(0);

        $this->assertEquals('60', $this->mp->multiply('10', '2', '3'));
        $this->assertEquals('60', $this->mp->multiply('6', '2', '5'));
    }
}
