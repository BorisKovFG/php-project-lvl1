<?php

namespace BrainGames\Progression;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;
  use function BrainGames\Cli\answer;

function run()
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
            if ($i != $except) {
                $cur[$i] = $next;
                $next += $d;
            } else {
                $result = $next;
                $cur[$i] = "..";
                $next += $d;
            }
        }
        $queistion = implode(" ", $cur);
        answer($queistion, $result, $count);
    }
    line("Congratulations, {$name}!");
}
