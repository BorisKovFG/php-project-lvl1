<?php

namespace BrainGames\Progression;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;
  use function BrainGames\Cli\answer;

function runProgression()
{
    $textOfQuestion = "What number is missing in the progression?";
    $name = hello($textOfQuestion);
    $count = 0;
    while ($count < 3) {
        $arrayException = rand(0, 9);
        $rangeOfArray = rand(1, 9);
        $countOfArray = 10;
        $curNumber = [];
        $nextrNumber = $rangeOfArray;
        $result = 0;
        for ($i = 0; $i < $countOfArray; $i++) {
            $curNumber[$i] = $nextrNumber;
            $nextrNumber += $rangeOfArray;
        }
        $result = $curNumber[$arrayException];
        $curNumber[$arrayException] = "..";
        $queistion = implode(" ", $curNumber);
        answer($queistion, $result, $count);
    }
    line("Congratulations, {$name}!");
}
