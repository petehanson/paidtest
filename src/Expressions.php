<?php

namespace Pete;

class Expressions {

    public static function evaluate($expression) {

        $runningTotal = 0;

        // need to refine my matching so I can deal with multiple places in each digit.
        // add additional searches for * and / and ()
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


                // we'd have to work out a determination here to push * and / before all + and - operations
                array_push($operators, $element);

            } else {
                // is number

                array_push($numbers,$element);


            }
        }

        //print_r($numbers);
        //print_r($operators);

        while (count($operators) > 0) {
            $op = array_shift($operators);
            $num1 = array_shift($numbers);
            $num2 = array_shift($numbers);

            //echo "$num2 $op $num1\n";

            $result = self::doMath($num1,$num2,$op);
            //echo $result . "\n";
            array_unshift($numbers,$result);
        }



        return array_pop($numbers);
    }

    protected function doMath($number1,$number2,$operator) {


        switch ($operator) {
            case "+":
                return $number2 + $number1;
                break;

            case "-":
                return $number1 - $number2;
                break;


            // add two more cases here for multiply and divide
        }

    }
}