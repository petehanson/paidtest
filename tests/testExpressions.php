<?php

require_once("vendor/autoload.php");

use \Pete\Expressions as Expressions;

class ExpressionsTest extends PHPUnit_Framework_TestCase
{
    function testAdd() {
        $this->assertEquals(9,Expressions::evaluate("2+7"));
        $this->assertEquals(10,Expressions::evaluate("2+7+1"));
    }

    function testSubtract() {
        $this->assertEquals(3,Expressions::evaluate("7-4"));
    }

}