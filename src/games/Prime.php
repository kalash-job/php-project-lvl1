<?php

namespace BrainGames\games\Prime;

use function BrainGames\Game\playBrainGame;

use const BrainGames\Game\MAX_WINS_COUNT;

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
    if ($number !== 2 && $number % 2 === 0) {
        return false;
    }
    if ($number <= 1) {
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
    $questions = [];
    $correctAnswers = [];
    for ($i = 0; $i < MAX_WINS_COUNT; $i++) {
        $questions[] = mt_rand(1, 1000);
        $correctAnswers[] = isPrime($questions[$i]) ? 'yes' : 'no';
    }
    playBrainGame($task, $questions, $correctAnswers);
    return;
}
