<?php

namespace BrainGames\Progression;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;
  use function BrainGames\Cli\answer;

function runProgression()
{
    $textOfQuestion = "What number is missing in the progression?";
    $name = hello($textOfQuestion);
    $count = 0;
    while ($count < 3) {
        $except = rand(0, 9);
        $d = rand(1, 9);
        $n = 10;
        $cur = [];
        $next = $d;
        $result = 0;
        for ($i = 0; $i < $n; $i++) {
            $cur[$i] = $next;
            $next += $d;
        }
        $result = $cur[$except];
        $cur[$except] = "..";
        $queistion = implode(" ", $cur);
        answer($queistion, $result, $count);
    }
    line("Congratulations, {$name}!");
}
