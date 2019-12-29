<?php

namespace BrainGames\Calc;

function getTaskCalc(): array
{
    $arithmeticOperators = ['+', '-', '*'];
    $firstOperand = mt_rand(1, 50);
    $secondOperand = mt_rand(1, 50);
    $operator = $arithmeticOperators[mt_rand(0, 2)];
    $expression = "$firstOperand $operator $secondOperand";
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
    return [$expression, $correctAnswer];
}
