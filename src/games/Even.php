<?php

namespace BrainGames\Even;

use function BrainGames\Game\playBrainGame;

/**
 * Функция создает и возвращает задание, вопросы и ответы к заданию brain-even
 *
 * Функция формирует текст задания, три случайных целых число-вопроса в задании brain-even
 * передает в "движок" задание, массивы с вопросами и ответами.
 *
 * @return void
 */
function getTaskEven()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $countOfQuestions = 3;
    $numbersQuestions = [];
    $correctAnswers = [];
    for ($i = 0; $i < $countOfQuestions; $i++) {
        $numbersQuestions[] = mt_rand(1, 100);
        $correctAnswers[] = $numbersQuestions[$i] % 2 === 0 ? 'yes' : 'no';
    }
    playBrainGame($task, $numbersQuestions, $correctAnswers);
    return;
}
