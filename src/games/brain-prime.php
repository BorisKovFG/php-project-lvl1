<?php

namespace BrainGames\Prime;

use function BrainGames\Cli\gameExecution;

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrime()
{
    $textOfQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $getDataForGame = function () {
        $question = rand(0, 99);
        $result = (isPrime($question)) ? "yes" : "no";
        return [$question, $result];
    };
    gameExecution($textOfQuestion, $getDataForGame);
}
