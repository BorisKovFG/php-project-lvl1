<?php

namespace BrainGames\Calc;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;

function run()
{
    line('Welcome to the Brain Game!!!!!!');
    line('Answer "yes" if the number is even, otherwise answer "no".' . "\n");
    $name = hello();
    $count = 0;
    while ($count < 3) {
        $randNumb1 = rand(0, 99);
        $randNumb2 = rand(0, 99);
        $char = ["+", "-", "*"];
        $chChar = $char [rand(0, 2)];
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
        if ($answer === (string) $result ) {
            line("Correct!");
            ++$count;
        } else {
                line($answer . " is wrong answer ;(. Correct answer was {$result}");
            if ($count > 0) {
                --$count;
            }
        }
    }
    line("Congratulations, {$name}!");
}
