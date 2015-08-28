<?php

require_once("vendor/autoload.php");

use \Pete\Expressions as Expressions;

class ExpressionsTest extends PHPUnit_Framework_TestCase
{
    function testAdd() {
        $this->assertEquals(7,Expressions::evaluate("2+7"));
    }

}