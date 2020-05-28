<?php

namespace BrainGames\Even;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;
  use function BrainGames\Cli\answer;

function run()
{
    $textOfQuestion = 'Answer "yes" if the number is even, otherwise answer "no"';
    $name = hello($textOfQuestion);
    $count = 0;
    while ($count < 3) {
        $queistion = rand();
        $result = ($queistion % 2 === 0) ? "yes" : "no";
        answer($queistion, $result, $count);
    }
    line("Congratulations, {$name}!");
}
