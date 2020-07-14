<?php

namespace BrainGames\Calc;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\gameExecution;

function runCalc()
{
    $textOfQuestion = "What is the result of the expression?";
    $getDataForGame = function () {
        $randNumb1 = rand(0, 100);
        $randNumb2 = rand(0, 100);
        $TOperation = ["+", "-", "*"];
        $countOfOperation = count($TOperation) - 1;
        $operation = $TOperation [rand(0, $countOfOperation)];
        $result = 0;
        switch ($operation) {
            case "-":
                $result = $randNumb1 - $randNumb2;
                break;
            case "+":
                $result = $randNumb1 + $randNumb2;
                break;
            case "*":
                $result = $randNumb1 * $randNumb2;
                break;
        }
        $question = "{$randNumb1}{$operation}{$randNumb2}";
        return [$question, (string) $result];
    };
    gameExecution($textOfQuestion, $getDataForGame);
}
