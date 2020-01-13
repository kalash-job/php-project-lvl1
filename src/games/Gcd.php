<?php

namespace BrainGames\Gcd;

use function BrainGames\Game\playBrainGame;

/**
 * Функция getGcd рассчитывает НОД для двух целых чисел
 *
 * @param int $firstOperand
 * @param int $secondOperand
 *
 * @return int
 */
function getGcd(int $firstOperand, int $secondOperand): int
{
    if ($firstOperand > $secondOperand) {
        $firstNumber = $firstOperand;
        $secondNumber = $secondOperand;
    } elseif ($firstOperand < $secondOperand) {
        $firstNumber = $secondOperand;
        $secondNumber = $firstOperand;
    } else {
        return $firstOperand;
    }
    $remainder = $firstNumber % $secondNumber;
    if ($remainder === 0) {
        return $secondNumber;
    } else {
        return getGcd($remainder, $secondNumber);
    }
}

/**
 * Функция создает задание, вопросы и ответы к заданию brain-gcd
 *
 * Функция формирует текст задания, три случайных выражения-вопроса, рассчитывает ответы
 * и передает в "движок" задание, массивы с вопросами и ответами.
 *
 * @return void
 */
function getTaskGcd()
{
    $task = 'Find the greatest common divisor of given numbers.';
    $countOfQuestions = 3;
    $expressionsQuestions = [];
    $correctAnswers = [];
    for ($i = 0; $i < $countOfQuestions; $i++) {
        $firstOperand = mt_rand(1, 50);
        $secondOperand = mt_rand(1, 50);
        $expressionsQuestions[] = "$firstOperand $secondOperand";
        $correctAnswers[] = (string) getGcd($firstOperand, $secondOperand);
    }
    playBrainGame($task, $expressionsQuestions, $correctAnswers);
    return;
}
