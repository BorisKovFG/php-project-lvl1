<?php

namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function gameExecution($textOfQuestion, $getDataForGame)
{
    line('Welcome to the Brain Game!!!!!!');
    line("{$textOfQuestion}\n");
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line();
    $itereationOfGame = 0;
    $numberOfAttempts = 3;
    for ($i = 0; $i < $numberOfAttempts = 3; $i++) {
        [$question, $result] = $getDataForGame();
        line("Question: {$question}");
        $answer = prompt('Your answer: ');
        if ($result ===  $answer) {
            line("Correct!");
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$result}");
            return line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}
