<?php

namespace BrainGames;

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
    $listOfNames = get_included_files();
    $data = [];
    $numberOfGame = 0;
    foreach ($listOfNames as $game) {
        if (stristr($game, "/games/")) {
            $numberOfGame++;
            //  delleted all before "brain" and ".php"
            $game = substr(substr($game, stripos($game, "brain")), 0, -4); 
            $data[$numberOfGame] = array($numberOfGame, $game);
        }  
    }
    line("\nPlease, choose № of game for playing!\n");
    $headers = array(' № ', 'Name of Game');
    $table = new \cli\Table();
    $table->setHeaders($headers);
    $table->setRows($data);
    $table->setRenderer(new \cli\table\Ascii([3, 18]));
    $table->display();
    $choise = prompt('Number');
    foreach ($data as $val) { 
        if ((int)$choise === $val[0]) {
            $runFunction = 'BrainGames\\'.ucfirst(substr($val[1], 6))."\\run".ucfirst(substr($val[1], 6));
            $runFunction();
        }
    }
    
}
