<?php

namespace BrainGames\Progression;

/**
 * Функция возвращает вопрос и правильный ответ для задания brain-progression
 *
 * Функция создает случайную прогрессию с пропуском в задании brain-progression
 * и возвращает массив с прогрессией и правильным ответом к заданию.
 *
 * @return array
 */
function getTaskProgression(): array
{
    $length = 10;
    $difference = mt_rand(1, 10);
    $numberOfHiddenMember  = mt_rand(0, $length - 1);
    $progression = [];
    $firstMember = mt_rand(1, 10);
    for ($i = 0; $i < $length; $i++) {
        if ($i !== $numberOfHiddenMember) {
            $progression[] = $firstMember + $difference * $i;
        } else {
            $progression[] = '..';
            $correctAnswer = (string) ($firstMember + $difference * $i);
        }
    }
    $expressionQuestion = implode(' ', $progression);
    return [$expressionQuestion, $correctAnswer];
}
