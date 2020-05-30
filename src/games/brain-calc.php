<?php

namespace BrainGames\Calc;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\gameExecution;

function runCalc()
{
    $textOfQuestion = "What is the result of the expression?";
    $dataForGame = function () {
        $randNumb1 = rand(0, 100);
        $randNumb2 = rand(0, 100);
        $char = ["+", "-", "*"];
        $arOperator = $char [rand(0, 2)];
        $result = 0;
        switch ($arOperator) {
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
        $question = "{$randNumb1}{$arOperator}{$randNumb2}";
        return [$question, $result];
    };
    gameExecution($textOfQuestion, $dataForGame);
}
