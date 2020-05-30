<?php

namespace BrainGames\Progression;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\gameExecution;

function runProgression()
{
    $textOfQuestion = "What number is missing in the progression?";
    $dataForGame = function () {
        $arrayException = rand(0, 9);
        $rangeOfArray = rand(1, 9);
        $countOfArray = 10;
        $curNumber = [];
        $nextrNumber = $rangeOfArray;
        $result = 0;
        for ($i = 0; $i < $countOfArray; $i++) {
            $curNumber[$i] = $nextrNumber + $rangeOfArray * $i;
        }
        $result = $curNumber[$arrayException];
        $curNumber[$arrayException] = "..";
        $question = implode(" ", $curNumber);
        return [$question, $result];
    };
    gameExecution($textOfQuestion, $dataForGame);
}
