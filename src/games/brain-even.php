<?php

namespace BrainGames\Even;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\gameExecution;

function runEven()
{
    $textOfQuestion = 'Answer "yes" if the number is even, otherwise answer "no"';
    $dataForGame = function () {
        $question = rand();
        $result = ($question % 2 === 0) ? "yes" : "no";
        return [$question, $result];
    };
    gameExecution($textOfQuestion, $dataForGame);
}
