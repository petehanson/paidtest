<?php

namespace Pete;

class Expressions {

    public static function evaluate($expression) {

        $runningTotal = 0;

        preg_match_all("/[\d\+\-]+?/",$expression,$matches);

        $matches = $matches[0];
        //print_r($matches);
        //$matches = array_reverse($matches);
        //print_r($matches);


        $numbers = array();
        $operators = array();


        foreach ($matches as $index=>$element) {
            if ($element == "+" || $element == '-') {
                // is operator


                array_push($operators, $element);
            } else {
                // is number

                array_push($numbers,$element);


            }
        }

        //print_r($numbers);
        //print_r($operators);

        while (count($operators) > 0) {
            $op = array_pop($operators);

            $num1 = array_pop($numbers);
            $num2 = array_pop($numbers);

            $result = self::doMath($num1,$num2,$op);
            echo $result . "\n";
            array_push($numbers,$result);
        }



        return array_pop($numbers);
    }

    protected function doMath($number1,$number2,$operator) {


        switch ($operator) {
            case "+":
                return $number2 + $number1;
                break;

            case "-":
                return $number2 - $number1;
                break;
        }

    }
}