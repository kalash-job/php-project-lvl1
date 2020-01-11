<?php

namespace BrainGames\Calc;

/**
 * Функция создает и возвращает вопрос и ответ к заданию в brain-calc
 *
 * Функция формирует случайное выражение-вопрос, рассчитывает ответ
 * и возвращает массив с вопросом и ответом.
 *
 * @return array
 */
function getTaskCalc(): array
{
    $arithmeticOperators = ['+', '-', '*'];
    $firstOperand = mt_rand(1, 50);
    $secondOperand = mt_rand(1, 50);
    $operator = $arithmeticOperators[mt_rand(0, 2)];
    $expressionQuestion = "$firstOperand $operator $secondOperand";
    switch ($operator) {
        case '+':
            $correctAnswer = (string) ($firstOperand + $secondOperand);
            break;
        case '-':
            $correctAnswer = (string) ($firstOperand - $secondOperand);
            break;
        case '*':
            $correctAnswer = (string) ($firstOperand * $secondOperand);
            break;
    }
    return [$expressionQuestion, $correctAnswer];
}
