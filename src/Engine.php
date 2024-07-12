<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function endGame($correctAnswers, $name)
{
    if ($correctAnswers === 3) {
        line("Congratulations, $name!");
    }
}
