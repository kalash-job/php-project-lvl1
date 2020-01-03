<?php

namespace BrainGames\Progression;

function getTaskProgression(): array
{
    $numberOfMembers = 10;
    $difference = mt_rand(1, 10);
    $numberOfHiddenMember  = mt_rand(0, $numberOfMembers - 1);
    $progression = [];
    $firstMember = mt_rand(1, 10);
    for ($i = 0; $i < $numberOfMembers; $i++) {
        if ($i !== $numberOfHiddenMember) {
            $progression[] = $firstMember + $difference * $i;
        } else {
            $progression[] = '..';
            $correctAnswer = (string) ($firstMember + $difference * $i);
        }
    }
    $expression = implode(' ', $progression);
    return [$expression, $correctAnswer];
}
