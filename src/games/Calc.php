<?php

namespace BrainGames\games\Calc;

use function BrainGames\Game\playBrainGame;

/**
 * Функция создает задание, вопросы и ответы к заданию brain-calc
 *
 * Функция формирует текст задания, три случайных выражения-вопроса, рассчитывает ответы
 * и передает в "движок" задание, массивы с вопросами и ответами.
 *
 * @return void
 */
function getTaskCalc()
{
    $task = 'What is the result of the expression?';
    $countOfQuestions = 3;
    $expressionsQuestions = [];
    $correctAnswers = [];
    for ($i = 0; $i < $countOfQuestions; $i++) {
        $arithmeticOperators = ['+', '-', '*'];
        $length = count($arithmeticOperators);
        $firstOperand = mt_rand(1, 50);
        $secondOperand = mt_rand(1, 50);
        $operator = $arithmeticOperators[mt_rand(0, $length - 1)];
        $expressionsQuestions[] = "$firstOperand $operator $secondOperand";
        switch ($operator) {
            case '+':
                $correctAnswers[] = (string) ($firstOperand + $secondOperand);
                break;
            case '-':
                $correctAnswers[] = (string) ($firstOperand - $secondOperand);
                break;
            case '*':
                $correctAnswers[] = (string) ($firstOperand * $secondOperand);
                break;
        }
    }
    playBrainGame($task, $expressionsQuestions, $correctAnswers);
    return;
}
