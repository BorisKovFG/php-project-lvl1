<?php

namespace BrainGames\Gcd;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;

function run()
{
    line('Welcome to the Brain Game!!!!!!');
    line('Find the greatest common divisor of given numbers.' . "\n");
    $name = hello();
    $count = 0;
    while ($count < 3) {
        $randNumb1 = rand(0, 100);
        $randNumb2 = rand(0, 100);
        $n = ($randNumb1 > $randNumb2) ? $randNumb2 : $randNumb1;
        $result = 0;
        while ($result < 1) {
            $chek1 = $randNumb1 / $n;
            $chek2 = $randNumb2 / $n;
            $result = (is_int($chek1)  && is_int($chek2)) ? $n : 0;
            $n--; 
        }
        line("Question: {$randNumb1} {$randNumb2}");
        $answer = prompt('Your answer: ');
        if ($answer === (string) $result ) {
            line("Correct!");
            ++$count;
        } else {
                line($answer . " is wrong answer ;(. Correct answer was {$result}");
                $count = 0;        
        }     
    }
    line("Congratulations, {$name}!");
}
