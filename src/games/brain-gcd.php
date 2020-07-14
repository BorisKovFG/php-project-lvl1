<?php

namespace BrainGames\Gcd;

use function BrainGames\Cli\gameExecution;

function findGcd($randNumb1, $randNumb2, $firstCheckNumber)
{
    $result = 0;
    while ($result < 1) {
        $chek1 = $randNumb1 / $firstCheckNumber;
        $chek2 = $randNumb2 / $firstCheckNumber;
        $result = (is_int($chek1)  && is_int($chek2)) ? $firstCheckNumber : 0;
        $firstCheckNumber--;
    }
    return $result;
}

function runGcd()
{
    $textOfQuestion = "Find the greatest common divisor of given numbers.";
    $getDataForGame = function () {
        $randNumb1 = rand(0, 100);
        $randNumb2 = rand(0, 100);
        $firstCheckNumber = ($randNumb1 > $randNumb2) ? $randNumb2 : $randNumb1;
        $question = "{$randNumb1} {$randNumb2}";
        $result = findGcd($randNumb1, $randNumb2, $firstCheckNumber);
        return [$question, (string) $result];
    };
    gameExecution($textOfQuestion, $getDataForGame);
}
