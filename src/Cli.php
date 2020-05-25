<?php

namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function hello()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    return $name;
}
