<?php
namespace WanaKin\MP\Tests;

class MPHelperRoundTest extends TestCase
{
    /**
     * Test numbers that round down
     *
     * @return void
     */
    public function test_rounding_numbers_that_round_down()
    {
        // Test rounding some numbers that round down
        $this->assertEquals('1.23', $this->mp->round('1.234', 2));
    }

    /**
     * Test numbers that round up
     *
     * @return void
     */
    public function test_rounding_numbers_that_round_up()
    {
        // Test numbers that round up
        $this->assertEquals('5.78', $this->mp->round('5.779', 2));
    }
}
