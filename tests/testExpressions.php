<?php

require_once("vendor/autoload.php");

use \Pete\Expressions as Expressions;

class ExpressionsTest extends PHPUnit_Framework_TestCase
{
    function testAdd() {
        $this->assertEquals(9,Expressions::evaluate("2+7"));
        $this->assertEquals(10,Expressions::evaluate("2+7+1"));
        $this->assertEquals(18,Expressions::evaluate("2+3+2+3+2+2+4"));
    }

    function testSubtract() {
        $this->assertEquals(3,Expressions::evaluate("7-4"));
        $this->assertEquals(8,Expressions::evaluate("7-4+5"));
        $this->assertEquals(11,Expressions::evaluate("9+5-3"));
        $this->assertEquals(6,Expressions::evaluate("9+5-3+8-9+1-5"));
    }

}