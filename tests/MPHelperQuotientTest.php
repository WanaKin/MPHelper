<?php
namespace WanaKin\MP\Tests;

class MPHelperQuotientTest extends TestCase
{
    /**
     * Test dividing two numbers
     *
     * @return void
     */
    public function test_dividing_two_numbers()
    {
        // Set the scale
        $this->mp->setScale(1);

        // Tests
        $this->assertEquals('12.5', $this->mp->divide('25', '2'));
        $this->assertEquals('16.0', $this->mp->divide('64', '4'));
    }

    /**
     * Test dividing three numbers
     *
     * @return void
     */
    public function test_dividing_three_numbers()
    {
        // Set the scale
        $this->mp->setScale(1);

        // Tests
        $this->assertEquals('8.0', $this->mp->divide('64', '4', '2'));
    }
}
