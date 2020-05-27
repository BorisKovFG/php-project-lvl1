<?php

namespace BrainGames\Progression;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;

function run()
{
    line('Welcome to the Brain Game!!!!!!');
    line('What number is missing in the progression?' . "\n");
    $name = hello();
    $count = 0;
    while ($count < 3) {
        $except = rand(0, 9);
        $d = rand(0, 9);
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
        line("Question: {$queistion}");
        $answer = prompt('Your answer: ');
        if ($answer === (string) $result) {
            line("Correct!");
            ++$count;
        } else {
                line($answer . " is wrong answer ;(. Correct answer was {$result}");
                $count = 0;
        }
    }
    line("Congratulations, {$name}!");
}
