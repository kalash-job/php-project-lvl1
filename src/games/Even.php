<?php

namespace BrainGames\Even;

function getTaskEven(): array
{
    $randomNumber = mt_rand(1, 100);
    $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';
    return [$randomNumber, $correctAnswer];
}
