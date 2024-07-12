<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function askQuestion($question, $rightChoice)
{
    line("Question: $question");
    $userChoice = prompt("Your answer: ");
    return (string) $userChoice === $rightChoice;
}

function compareAnswers()
{
    if ($userChoice === $rightChoice) {
        line("Correct!");
        $correctAnswers++;
    } else {
        line("'$userChoice' is wrong answer ;(. Correct answer was '$rightChoice'.\nLet's try again, $name!");
        $i = 3;
    }
}

function endGame($correctAnswers, $name)
{
    if ($correctAnswers === 3) {
        line("Congratulations, $name!");
    }
}
