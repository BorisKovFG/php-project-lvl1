<?php

namespace BrainGames\Prime;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\gameExecution;

function runPrime()
{
    $textOfQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $dataForGame = function () {
        $question = rand();
        $result = (gmp_prob_prime($question)) ? "yes" : "no";
        return [$question, $result];
    };
    gameExecution($textOfQuestion, $dataForGame);
}
