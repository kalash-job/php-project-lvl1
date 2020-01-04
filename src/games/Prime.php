<?php

namespace BrainGames\Prime;

/**
 * Функция принимает целое число и возвращает true, если число простое, или false, если число составное.
 */
function isPrime(int $number): bool
{
    if ($number % 2 === 0) {
        return false;
    }
    for ($i = 3, $limit = sqrt($number); $i <= $limit; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

/**
 * Функция создает и возвращает вопрос и ответ к заданию в brain-prime.
 *
 * Функция создает случайное целое число-вопрос в задании с определением простого числа
 * и возвращает массив с этим числом и правильным ответом.
 */
function getTaskPrime(): array
{
    $randomNumber = mt_rand(1, 1000);
    $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
    return [$randomNumber, $correctAnswer];
}
