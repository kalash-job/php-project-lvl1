<?php

namespace BrainGames\Calc;

use function BrainGames\Game\playBrainGame;

/**
 * Функция создает и возвращает задание, вопросы и ответы к заданию в brain-calc
 *
 * Функция формирует текст задания три случайных выражения-вопроса, рассчитывает ответы
 * и возвращает массив с заданием, вопросами и ответами.
 *
 * @return void
 */
function getTaskCalc()
{
    $task = 'What is the result of the expression?';
    $numberOfQuestions = 3;
    $expressionQuestions = [];
    $correctAnswers = [];
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $arithmeticOperators = ['+', '-', '*'];
        $length = count($arithmeticOperators);
        $firstOperand = mt_rand(1, 50);
        $secondOperand = mt_rand(1, 50);
        $operator = $arithmeticOperators[mt_rand(0, $length - 1)];
        $expressionQuestions[] = "$firstOperand $operator $secondOperand";
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
    playBrainGame($task, $expressionQuestions, $correctAnswers);
}
