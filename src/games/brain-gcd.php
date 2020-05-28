<?php

namespace BrainGames\Gcd;

  use function cli\line;
  use function cli\prompt;
  use function BrainGames\Cli\hello;
  use function BrainGames\Cli\answer;

function run()
{
    $textOfQuestion = "Find the greatest common divisor of given numbers.";
    $name = hello($textOfQuestion);
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
        $question = "{$randNumb1} {$randNumb2}";
        answer($question, $result, $count);
    }
    line("Congratulations, {$name}!");
}
