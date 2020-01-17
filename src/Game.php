<?php

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;

/**
 * Функция playBrainGame формирует диалог с пользователем игр
 *
 * @param  string $task
 * @param  array $questions
 * @param  array $correctAnswers
 *
 * @return void
 */
function playBrainGame(string $task, array $questions, array $correctAnswers)
{
    line('Welcome to the Brain Games!');
    line($task);
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0, $limitWinCount = 3; $i < $limitWinCount; $i++) {
        line("Question: $questions[$i]");
        $answer = strtolower(prompt('Your answer'));
        $correctAnswer = $correctAnswers[$i];
        if ($correctAnswer === $answer) {
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
