<?php

namespace BrainGames\Gcd;

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

function getTaskGcd(): array
{
    $firstOperand = mt_rand(1, 50);
    $secondOperand = mt_rand(1, 50);
    $expression = "$firstOperand $secondOperand";
    $correctAnswer = (string) getGcd($firstOperand, $secondOperand);
    return [$expression, $correctAnswer];
}
