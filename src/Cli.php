<?php

namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function hello($textOfQuestion)
{
    line('Welcome to the Brain Game!!!!!!');
    line("{$textOfQuestion}\n");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    return $name;
}

function answer($queistion, $result, &$count)
{
    line("Question: {$queistion}");
    $answer = prompt('Your answer: ');
    if ($answer === (string) $result) {
        line("Correct!");
        ++$count;
        return;
    } else {
        line($answer . " is wrong answer ;(. Correct answer was {$result}");
        $count = 0;
        return;
    }
}
