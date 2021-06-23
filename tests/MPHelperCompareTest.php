<?php
namespace WanaKin\MP\Tests;

class MPHelperCompareTest extends TestCase
{
    /**
     * Test comparisons between two numbers
     *
     * @return void
     */
    public function test_comparing_two_numbers()
    {
        // Set the scale
        $this->mp->setScale(2);

        // Tests
        $this->assertEquals('-1', $this->mp->compare('2.25', '2.26'));
        $this->assertEquals('0', $this->mp->compare('2.33', '2.33'));
        $this->assertEquals('1', $this->mp->compare('5.56', '2.98'));

        // These should be seen as equal because of the scale
        $this->assertEquals('0', $this->mp->compare('2.558', '2.558'));
    }
}
