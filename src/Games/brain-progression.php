<?php

namespace Brain\Games\Games\brain\progression;

use Brain\Games\Engine;

const MAX_ATTEMPT = 3;
const TASK_TEXT = 'What number is missing in the progression?';

function task()
{
    $dataOfTask = function () {
        $progression[0] = rand(0, 100);
        $stepOfProgression = rand(1, 10);
        for ($i = 1; $maxIndex = rand(4, 9), $i < $maxIndex; $i++) {
            $progression[$i] = $progression[$i - 1] + $stepOfProgression;
        }
        $secretIndex = array_rand($progression);
        $rightAnswer = $progression[$secretIndex];
        $progression[$secretIndex] = "..";
        $question = implode(" ", $progression);
        return [$question, (string)$rightAnswer];
    };
    Engine\gameEngine($dataOfTask, MAX_ATTEMPT, TASK_TEXT);
}
