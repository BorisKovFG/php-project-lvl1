<?php

namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function gameExecution($textOfQuestion, $dataForGame)
{
    line('Welcome to the Brain Game!!!!!!');
    line("{$textOfQuestion}\n");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    $itereationOfGame = 0;
    while ($itereationOfGame < 3) {
        $arrDataForGame = $dataForGame();
        [$question, $result] = $arrDataForGame;
        line("Question: {$question}");
        $answer = prompt('Your answer: ');
        if ($answer === (string) $result) {
            line("Correct!");
            ++$itereationOfGame;
        } else {
            line($answer . " is wrong answer ;(. Correct answer was {$result}");
            $itereationOfGame = 0;
        }
    }
    line("Congratulations, {$name}!");
}
