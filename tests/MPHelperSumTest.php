<?php
namespace WanaKin\MP\Tests;

class MPHelperSumTest extends TestCase
{
    /**
     * Test adding a pair of numbers
     *
     * @return void
     */
    public function test_adding_pair_of_numbers()
    {
        // Try adding some numbers
        $this->mp->setScale(1);
        $this->assertEquals('5.6', $this->mp->add('4.5', '1.1'));
    }

    /**
     * Test adding three numbers
     *
     * @return void
     */
    public function test_adding_three_numbers()
    {
        // Add some numbers
        $this->mp->setScale(1);
        $this->assertEquals('1.2', $this->mp->add('0.3', '0.5', '0.4'));
    }
}
