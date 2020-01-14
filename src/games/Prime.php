<?php

namespace BrainGames\Prime;

use function BrainGames\Game\playBrainGame;

/**
 * Функция isPrime проверяет простоту числа
 *
 * Функция принимает целое число и возвращает true, если число простое,
 * или false, если число составное.
 *
 * @param int $number
 *
 * @return bool
 */
function isPrime(int $number): bool
{
    if (($number !== 2 && $number % 2 === 0) || $number <= 1) {
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
 * Функция создает и возвращает задание, вопросы и ответы к заданию brain-prime
 *
 * Функция формирует текст задания, три случайных целых числа-вопроса в задании brain-prime
 * передает в "движок" задание, массивы с вопросами и ответами.
 *
 * @return void
 */
function getTaskPrime()
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $countOfQuestions = 3;
    $numbersQuestions = [];
    $correctAnswers = [];
    for ($i = 0; $i < $countOfQuestions; $i++) {
        $numbersQuestions[] = mt_rand(1, 1000);
        $correctAnswers[] = isPrime($numbersQuestions[$i]) ? 'yes' : 'no';
    }
    playBrainGame($task, $numbersQuestions, $correctAnswers);
    return;
}
