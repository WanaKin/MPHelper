<?php
namespace WanaKin\MP\Tests;

class MPHelperSqrtTest extends TestCase
{
    public function test_square_roots()
    {
        $this->mp->setScale(2);

        $this->assertEquals('1.41', $this->mp->sqrt('2'));
        $this->assertEquals('5.00', $this->mp->sqrt('25'));
    }
}
