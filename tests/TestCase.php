<?php
namespace WanaKin\MP\Tests;

use WanaKin\MP\MPHelper;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /** @var MPHelper */
    protected $mp;

    /**
     * Set up befor each test
     *
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();

        $this->mp = new MPHelper();
    }
}
