<?php

namespace BrainGames\Even;

/**
 * Функция возвращает вопрос и правильный ответ для задания brain-even
 *
 * Функция создает случайное целое число-вопрос в задании brain-even
 * и возвращает массив с этим числом и правильным ответом.
 *
 * @return array
 */
function getTaskEven(): array
{
    $randomNumber = mt_rand(1, 100);
    $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';
    return [$randomNumber, $correctAnswer];
}
