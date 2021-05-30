<?php

namespace Brain\Games\Games\brain\prime;

use Brain\Games\Engine;

const MAX_ATTEMPT = 3;
const TASK_TEXT = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function task()
{
    $dataTask = function () {
        $question = rand(1, 100);
        $rightAnswer = "yes";
        for ($i = $question - 1; $i > 1; $i--) {
            if (is_int($question / $i)) {
                $rightAnswer = "no";
            }
        }
        return [$question, (string)$rightAnswer];
    };
    Engine\gameEngine($dataTask, MAX_ATTEMPT, TASK_TEXT);
}
