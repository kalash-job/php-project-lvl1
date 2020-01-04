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
    $numberOfMembers = 10;
    $difference = mt_rand(1, 10);
    $numberOfHiddenMember  = mt_rand(0, $numberOfMembers - 1);
    $progression = [];
    $firstMember = mt_rand(1, 10);
    for ($i = 0; $i < $numberOfMembers; $i++) {
        if ($i !== $numberOfHiddenMember) {
            $progression[] = $firstMember + $difference * $i;
        } else {
            $progression[] = '..';
            $correctAnswer = (string) ($firstMember + $difference * $i);
        }
    }
    $expression = implode(' ', $progression);
    return [$expression, $correctAnswer];
}
