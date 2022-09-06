<?php

$array = [];
$count = 0;

$number = 0;
$index = 0;

$min = 0;
$max = 0;
$i = 0;


while (!$count) {
    echo "Введіть к-сть елементів масиву, число має бути > 10000. Введіть число:";
    $count = trim(fgets(STDIN));

    if ($count < 10000) {
        echo "Задане число < 10000";
        die;
    } elseif ($count == 10000) {
        echo "Задане число = 10000";
        die;
    }
}

while ($i < $count) {
    $randNumber = rand();

    if ($i == 0) {
        $min = $randNumber;
        $max = $randNumber;
    }

    if ($randNumber > $max) {
        $max = $randNumber;
    } elseif ($randNumber < $min) {
        $min = $randNumber;
    }

    $array[] = $randNumber;
    $i++;
}

echo "<pre/>";
print_r($array);
echo "<pre/>";

if (!$number) {
    $number = readline("Введіть число для пошуку:");
}

function linearSearch($array, $number)
{
    foreach ($array as $key => $value) {
        if ($value == $number) {
            return $key;
        }
    }
    return false;
}


//function maxMinSearch($numsArray): int|string
//{
//    $keyMax = 0;
//    $keyMin = 0;
//    $max = 0;
//    $min = 0;
//    $i = 0;
//
//    foreach ($numsArray as $key => $value) {
//        if ($i == 0) {
//            $max = $value;
//            $min = $value;
//            $i = 1;
//        }
//
//        if ($value > $max) {
//            $max = $value;
//            $keyMax = $key;
//        } elseif ($value < $min) {
//            $min = $value;
//            $keyMin = $key;
//        }
//    }
//
//    echo "Індекс максимального значення: " . $keyMax . " Саме максимальне значення: " . $max . "<\n>";
//    echo "Індекс мінімального значення: " . $keyMin . " Саме мінімальне значення: " . $min . "<\n>";
//    return $keyMax . $keyMin . $max . $min;
//}


function binarySearch(array $array, $number)
{
    asort($array);
    $start = array_key_first($array);
    $end = array_key_last($array);

    if ($start > $end) {
        throw new LogicException("Item not found");
    }

    $halfIndex = ($start + $end) / 2;

    if ($array[$halfIndex] !== $number) {
        if ($array[$halfIndex] < $number) {
            $start = $halfIndex + 1;
        } else {
            $end = $halfIndex - 1;
        }

        return binarySearch($array, $number);
    }
    return $halfIndex;
}

echo "Лінійний пошук  ";
$startTime = microtime(true);
$result = linearSearch($array, $number);
echo "Результат лінійного пошуку: " . "\n";
if ($result) {
    echo "Число: " . $number . " Знайдене, іднекс у масиві: " . $result . "\n";
} else {
    echo "Число не знайдено \n";
}
$time = round(microtime(true) - $startTime, 6);
echo "Час роботи функції 'linearSearch': " . $time . "\n";

//$start = microtime(true);
//maxMinSearch($array);
//$time = round(microtime(true) - $start, 4);
//echo "Час роботи функції 'maxMinSearch': " . $time . "<\n>";

//echo "<br>" . binarySearch($array, $number);



