<?php

namespace BrainGames\Prime;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;
  use function BrainGames\Cli\answer;

function run()
{
    $textOfQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $name = hello($textOfQuestion);
    $count = 0;
    while ($count < 3) {
        $queistion = rand();
        $result = (gmp_prob_prime($queistion)) ? "yes" : "no";
        answer($queistion, $result, $count);
    }
    line("Congratulations, {$name}!");
}
