<?php
namespace WanaKin\MP\Tests;

class MPHelperSumTest extends TestCase
{
    public function test_adding_pair_of_numbers()
    {
        $this->mp->setScale(1);
        $this->assertEquals('5.6', $this->mp->add('4.5', '1.1'));
    }

    public function test_adding_three_numbers()
    {
        $this->mp->setScale(1);
        $this->assertEquals('1.2', $this->mp->add('0.3', '0.5', '0.4'));
    }
}
