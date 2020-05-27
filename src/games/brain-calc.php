<?php

namespace BrainGames\Calc;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;

function run()
{
    line('Welcome to the Brain Game!!!!!!');
    line('What is the result of the expression?' . "\n");
    $name = hello();
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
        line("Question: {$randNumb1}{$chChar}{$randNumb2}");
        $answer = prompt('Your answer: ');
        if ($answer === (string) $result) {
            line("Correct!");
            ++$count;
        } else {
                line($answer . " is wrong answer ;(. Correct answer was {$result}");
                $count = 0;
        }
    }
    line("Congratulations, {$name}!");
}
