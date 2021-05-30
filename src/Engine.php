<?php

namespace Brain\Games\Engine;

//  src/Engine.php
use function cli\line;
use function cli\prompt;

function gameEngine($dataOfTask, $numberOfAttempt, $textForTask)
{
    //There we say Hello and ask user's name
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($textForTask);
    $congratulationsText = "Congratulations, %s!";
    for ($i = 0; $i < $numberOfAttempt; $i++) {
        [$question, $rightAnswer] = $dataOfTask();    //talking with user and form data for checking
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");
        if ($rightAnswer !== $userAnswer) {     //checking the answer
            $congratulationsText = "Let's try again, %s!";
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            break;
        }
        line("Correct!");
    }
    line($congratulationsText, $name);
}
