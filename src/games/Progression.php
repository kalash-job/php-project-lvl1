<?php

namespace BrainGames\games\Progression;

use function BrainGames\Game\playBrainGame;

/**
 * Функция создает задание, вопросы и ответы к заданию brain-progression
 *
 * Функция формирует текст задания, три случайных прогрессии с пропуском, рассчитывает
 * ответы и передает в "движок" задание, массивы с вопросами и ответами.
 *
 * @return void
 */
function getTaskProgression()
{
    $task = 'What number is missing in the progression?';
    $countOfQuestions = 3;
    $expressionsQuestions = [];
    $correctAnswers = [];
    for ($i = 0; $i < $countOfQuestions; $i++) {
        $length = 10;
        $difference = mt_rand(1, 10);
        $numberOfHiddenMember  = mt_rand(0, $length - 1);
        $progression = [];
        $firstMember = mt_rand(1, 10);
        for ($j = 0; $j < $length; $j++) {
            if ($j !== $numberOfHiddenMember) {
                $progression[] = $firstMember + $difference * $j;
            } else {
                $progression[] = '..';
                $correctAnswers[] = (string) ($firstMember + $difference * $j);
            }
        }
        $expressionsQuestions[] = implode(' ', $progression);
    }
    playBrainGame($task, $expressionsQuestions, $correctAnswers);
    return;
}
