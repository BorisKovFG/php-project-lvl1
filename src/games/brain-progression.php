<?php

namespace BrainGames\Progression;

use function BrainGames\Cli\gameExecution;

function runProgression()
{
    $textOfQuestion = "What number is missing in the progression?";
    $getDataForGame = function () {
        $hiddenElement = rand(0, 9);
        $progressionStep = rand(1, 9);
        $progressionLength = 10;
        $progressionElement = [];
        $firstElement = $progressionStep;
        $result = 0;
        for ($i = 0; $i < $progressionLength; $i++) {
            $progressionElement[$i] = $firstElement + $progressionStep * $i;
        }
        $correctAnswer = $progressionElement[$hiddenElement];
        $progressionElement[$hiddenElement] = "..";
        $question = implode(" ", $progressionElement);
        return [$question, $correctAnswer];
    };
    gameExecution($textOfQuestion, $getDataForGame);
}
