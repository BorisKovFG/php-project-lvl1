<?php

namespace Brain\Games\Games\brain\gcd;

use Brain\Games\Engine;

const MAX_ATTEMPT = 3;
const TASK_TEXT = 'Find the greatest common divisor of given numbers.';

function task()
{
    $dataOfTask = function () {
        $value1 = rand(1, 100);
        $value2 = rand(1, 100);
        $question = "{$value1} {$value2}";
        $rightAnswer = null;
        for ($minValue = ($value1 < $value2) ? $value1 : $value2; $minValue > 0; $minValue--) {
            if (($value1 % $minValue) === 0 && ($value2 % $minValue) === 0) {
                $rightAnswer = $minValue;
                break;
            }
        }
        return [$question, (string)$rightAnswer];
    };
    Engine\gameEngine($dataOfTask, MAX_ATTEMPT, TASK_TEXT);
}
