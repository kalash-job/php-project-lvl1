<?php

namespace BrainGames\Gcd;

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
 * Функция создает и возвращает вопрос и ответ к заданию в brain-gcd
 *
 * @return array
 */
function getTaskGcd(): array
{
    $firstOperand = mt_rand(1, 50);
    $secondOperand = mt_rand(1, 50);
    $expression = "$firstOperand $secondOperand";
    $correctAnswer = (string) getGcd($firstOperand, $secondOperand);
    return [$expression, $correctAnswer];
}
