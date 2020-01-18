<?php

namespace BrainGames\games\Calc;

use function BrainGames\Game\playBrainGame;

use const BrainGames\Game\MAX_WINS_COUNT;

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
    $questions = [];
    $correctAnswers = [];
    for ($i = 0; $i < MAX_WINS_COUNT; $i++) {
        $arithmeticOperators = ['+', '-', '*'];
        $length = count($arithmeticOperators);
        $firstOperand = mt_rand(1, 50);
        $secondOperand = mt_rand(1, 50);
        $operator = $arithmeticOperators[mt_rand(0, $length - 1)];
        $questions[] = "$firstOperand $operator $secondOperand";
        switch ($operator) {
            case '+':
                $correctAnswer = ($firstOperand + $secondOperand);
                break;
            case '-':
                $correctAnswer = ($firstOperand - $secondOperand);
                break;
            case '*':
                $correctAnswer = ($firstOperand * $secondOperand);
                break;
        }
        $correctAnswers[] = "$correctAnswer";
    }
    playBrainGame($task, $questions, $correctAnswers);
    return;
}
