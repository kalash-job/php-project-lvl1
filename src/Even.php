<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function playBrainEven()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $count = 0;
    $winNumber = 3;
    while ($count < $winNumber) {
        $randomNumber = mt_rand(1, 100);
        line($randomNumber);
        $answer = strtolower(prompt('Your answer'));
        $evenNumber = $randomNumber % 2 === 0 ? 'yes' : 'no';
        if ($evenNumber === $answer) {
            $count++;
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$evenNumber'.");
            line("Let's try again, $name!");
        }
    }
    line("Congratulations, $name!");
    return;
}
