<?php

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;
use function BrainGames\Even\getTaskEven;
use function BrainGames\Calc\getTaskCalc;

function playBrainGame(string $gamesType)
{
    $tasks = [
        'even' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'calc' => 'What is the result of the expression?'
    ];
    line('Welcome to the Brain Games!');
    $task = $tasks[$gamesType];
    line($task);
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $count = 0;
    $winNumber = 3;
    while ($count < $winNumber) {
        switch ($gamesType) {
            case 'even':
                [$question, $correctAnswer] = getTaskEven();
                break;
            case 'calc':
                [$question, $correctAnswer] = getTaskCalc();
                break;
        }
        line("Question: $question");
        $answer = strtolower(prompt('Your answer'));
        if ($correctAnswer === $answer) {
            $count++;
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }
    line("Congratulations, $name!");
    return;
}
