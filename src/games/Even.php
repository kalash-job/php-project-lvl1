<?php

namespace BrainGames\games\Even;

use function BrainGames\Game\playBrainGame;
use const BrainGames\Game\MAX_WINS_COUNT;

/**
 * Функция создает и возвращает задание, вопросы и ответы к заданию brain-even
 *
 * Функция формирует текст задания, три случайных целых числа-вопроса в задании brain-even
 * передает в "движок" задание, массивы с вопросами и ответами.
 *
 * @return void
 */
function getTaskEven()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $numbersQuestions = [];
    $correctAnswers = [];
    for ($i = 0; $i < MAX_WINS_COUNT; $i++) {
        $numbersQuestions[] = mt_rand(1, 100);
        $correctAnswers[] = $numbersQuestions[$i] % 2 === 0 ? 'yes' : 'no';
    }
    playBrainGame($task, $numbersQuestions, $correctAnswers);
    return;
}
