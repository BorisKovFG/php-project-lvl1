<?php

namespace BrainGames\BrainGames;

  use function cli\line;
  use function cli\prompt;
  use function cli\Table;
  use function BrainGames\Even\runEven;
  use function BrainGames\Calc\runCalc;
  use function BrainGames\Gcd\runGcd;
  use function BrainGames\Progression\runProgression;
  use function BrainGames\Prime\runPrime;

function runBrainGames()
{
    line("\nPlease, chose № of game for playing!\n");
    $headers = array(' № ', 'Name of Game');
    $data = array(
    array(' 1 ', 'brain-even'),
    array(' 2 ', 'brain-calc'),
    array(' 3 ', 'brain-gcd'),
    array(' 4 ', 'brain-progression'),
    array(' 5 ', 'brain-prime'));
    $table = new \cli\Table();
    $table->setHeaders($headers);
    $table->setRows($data);
    $table->setRenderer(new \cli\table\Ascii([3, 18]));
    $table->display();
    $choise = 0;
    $choise = prompt('Number');
    switch ($choise) {
        case "1":
            runEven();
            break;
        case "2":
            runCalc();
            break;
        case "3":
            runGcd();
            break;
        case "4":
            runProgression();
            break;
        case "5":
            runPrime();
            break;
    }
}
