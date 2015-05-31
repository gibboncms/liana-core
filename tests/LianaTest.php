<?php

namespace GibbonCms\Liana\Test;

use GibbonCms\Liana\Liana;
use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->liana = new Liana(__DIR__);
    }

    /** @test */
    public function it_is_initializable()
    {
        $this->assertInstanceOf(Liana::class, $this->liana);
    }
}
