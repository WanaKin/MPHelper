<?php
namespace WanaKin\MP\Tests;

class MPHelperRoundTest extends TestCase
{
    public function test_rounding_numbers_that_round_down()
    {
        $this->assertEquals('1.23', $this->mp->round('1.234', 2));
    }

    public function test_rounding_numbers_that_round_up()
    {
        $this->assertEquals('5.78', $this->mp->round('5.779', 2));
    }
}
