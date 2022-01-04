<?php
namespace WanaKin\MP\Tests;

class MPHelperDifferenceTest extends TestCase {
    public function test_subtracting_a_pair_of_numbers()
    {
        $this->mp->setScale(0);
        $this->assertEquals('15', $this->mp->subtract('20', '5'));
    }

    public function test_subtracting_three_numbers()
    {
        $this->mp->setScale(0);
        $this->assertEquals('5', $this->mp->subtract('100', '90', '5'));
    }
}
