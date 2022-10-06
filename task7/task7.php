<?php

$example = 'codecool';
$part1 = 'cdcl';
$part2 = 'oeoo';

function stringMaker(string $part1, string $part2, string $example): bool
{
    $arrPart1 = str_split($part1);
    $arrPart2 = str_split($part2);
    $arrExample = str_split($example);
    $arr1 = [];
    $arr2 = [];

//    if ($arrPart1[0] === $arrExample[0] || $arrPart2[0] === $arrExample[0]) {
//    } else {
//        echo "Неможливо скласти";
//        return false;
//    }

    if ($arrPart1[0] !== $arrExample[0] && $arrPart2[0] !== $arrExample[0]) {
        echo "Неможливо скласти";
        return false;
    }

    foreach ($arrExample as $element) {
        if ($element === 'a' ||
            $element === 'e' ||
            $element === 'i' ||
            $element === 'o' ||
            $element === 'u' ||
            $element === 'y') {
            $arr2[] = $element;
        } else {
            $arr1[] = $element;
        }
    }

    if ($arrPart1 === $arr1 && $arrPart2 === $arr2) {
        return true;
    }else {
        return false;
    }
}

if (stringMaker($part1, $part2, $example)) {
    echo "Слово => <strong>$example</strong> <strong>МОЖНА</strong> скласти з частин <strong>$part1</strong> та <strong>$part2</strong> <br/> ПОСЛІДОВНІСТЬ ВІРНА";
} else {
    echo "Слово <strong>$example</strong> неможна скласти з частин <strong>$part1</strong> та <strong>$part2</strong> <br/> ПОСЛІДНОВНІСТЬ НЕВІРНА";
}