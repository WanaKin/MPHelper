<?php
namespace WanaKin\MP\Tests;

class MPHelperDifferenceTest extends TestCase {
    /**
     * Test substracting two numbers
     *
     * @return void
     */
    public function test_substracting_a_pair_of_numbers()
    {
        // Set the scale
        $this->mp->setScale(0);

        // Tests
        $this->assertEquals('15', $this->mp->substract('20', '5'));
    }

    /**
     * Test substracting three numbers
     *
     * @return void
     */
    public function test_subtracting_three_numbers()
    {
        // Set the scale
        $this->mp->setScale(0);

        // Tests
        $this->assertEquals('5', $this->mp->substract('100', '90', '5'));
    }
}
