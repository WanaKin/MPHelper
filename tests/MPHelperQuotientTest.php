<?php
namespace WanaKin\MP\Tests;

class MPHelperQuotientTest extends TestCase
{
    public function test_dividing_two_numbers()
    {
        $this->mp->setScale(1);

        $this->assertEquals('12.5', $this->mp->divide('25', '2'));
        $this->assertEquals('16.0', $this->mp->divide('64', '4'));
    }

    public function test_dividing_three_numbers()
    {
        $this->mp->setScale(1);

        $this->assertEquals('8.0', $this->mp->divide('64', '4', '2'));
    }
}
