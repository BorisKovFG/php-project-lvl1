<?php

namespace BrainGames\Calc;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;
  use function BrainGames\Cli\answer;

function run()
{
    $textOfQuestion = "What is the result of the expression?";
    $name = hello($textOfQuestion);
    $count = 0;
    while ($count < 3) {
        $randNumb1 = rand(0, 100);
        $randNumb2 = rand(0, 100);
        $char = ["+", "-", "*"];
        $chChar = $char [rand(0, 2)];
        $result = 0;
        switch ($chChar) {
            case "-":
                $result = $randNumb1 - $randNumb2;
                break;
            case "+":
                $result = $randNumb1 + $randNumb2;
                break;
            case "*":
                $result = $randNumb1 * $randNumb2;
                break;
            default:
                return false;
        }
        $queistion = "{$randNumb1}{$chChar}{$randNumb2}";
        answer($queistion, $result, $count);
    }
    line("Congratulations, {$name}!");
}
