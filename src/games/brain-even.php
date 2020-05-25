<?php

namespace BrainGames\Even;

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
        $randNumb = rand();
        line("Question: " . $randNumb);
        $answer = prompt('Your answer: ');
        if (($answer === "yes" && $randNumb % 2 === 0) || ($answer === "no" && $randNumb % 2 !== 0)) {
            line("Correct!");
            ++$count;
        } else {
            if ($randNumb % 2 === 0) {
                line($answer . " is wrong answer ;(. Correct answer was 'yes'");
            } else {
                line($answer . " is wrong answer ;(. Correct answer was 'no'");
            }
            if ($count > 0) {
                --$count;
            }
        }
    }
    line("Congratulations {$name}!");
}
