<?php

namespace Brain\Games\Games\brain\calc;

use Brain\Games\Engine;

const MAX_ATTEMPT = 3;
const TASK_TEXT = 'What is the result of the expression?';

function task()
{
    $dataOfTask = function () {
        $mathOperators = ["+" , "-", "*"];
        $valueForMathExpr1 = rand(1, 100);
        $valueForMathExpr2 = rand(1, 100);
        $currentOperator = $mathOperators[array_rand($mathOperators)];
        $question = "{$valueForMathExpr1} {$currentOperator} {$valueForMathExpr2}";
        $rightAnswer = null;
        switch ($currentOperator) {
            case "+":
                $rightAnswer = $valueForMathExpr1 + $valueForMathExpr2;
                break;
            case "-":
                $rightAnswer = $valueForMathExpr1 - $valueForMathExpr2;
                break;
            case "*":
                $rightAnswer = $valueForMathExpr1 * $valueForMathExpr2;
                break;
        }
        return [$question, (string)$rightAnswer];
    };
    Engine\gameEngine($dataOfTask, MAX_ATTEMPT, TASK_TEXT);
}
