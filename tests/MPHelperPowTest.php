<?php
namespace WanaKin\MP\Tests;

class MPHelperPowTest extends TestCase
{
    public function test_power_func()
    {
        $this->mp->setScale(0);

        $this->assertEquals('16', $this->mp->pow('2', '4'));
        $this->assertEquals('16', $this->mp->pow('4', '2'));
        $this->assertEquals('27', $this->mp->pow('3', '3'));
        $this->assertEquals('81', $this->mp->pow('9', '2'));
    }
}
