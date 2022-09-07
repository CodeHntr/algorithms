<?php

$array = [];
$count = 0;

$number = 0;
$index = 0;

$min = 0;
$max = 0;
$i = 0;
$steps = 0;

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
    $steps = 0;
    foreach ($array as $key => $value) {
        $steps++;
        if ($value == $number) {
            return [
                'index' => $key,
                'steps' => $steps
            ];
        }
    }
    return false;
}

function binarySearch($array, $number)
{
    sort($array);
    $left = 0;
    $right = count($array) - 1;
    $result = false;
    $steps = 0;


    while ($left < $right && !$result) {
        $m = (int) round(($left + $right) / 2);
        $steps++;

        if ($array[$m] == $number) {
            $result = true;
            echo "\n Value: $array[$m]  Знайденно! під індексом: $m . Зроблено: $steps кроків. ";
        } elseif ($array[$m] < $number) {
            $left = $m + 1;
        } else {
            $right = $m - 1;
        }
    }
    if (!$result) {
        echo "\n number $number Не знайдено. Зроблено: $steps кроків. ";
    }
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


//echo "Лінійний пошук  ";
//$startTime = microtime(true);
//$result = linearSearch($array, $number);
//echo "Результат лінійного пошуку: " . "\n";
//if ($result) {
//    echo "Число: " . $number . " Знайдене, іднекс у масиві: " . $result['index'] .  " Зроблено кроків:" . $result['steps'] . "\n";
//} else {
//    echo "Число не знайдено \n";
//}
//$time = round(microtime(true) - $startTime, 6);
//echo "Час роботи функції 'linearSearch': " . $time . "\n";


echo "Бінарний пошук  ";
$startTime = microtime(true);
binarySearch($array, $number);
$time = round(microtime(true) - $startTime, 6);
echo "Час роботи функції 'linearSearch': " . $time . "\n";




//$start = microtime(true);
//maxMinSearch($array);
//$time = round(microtime(true) - $start, 4);
//echo "Час роботи функції 'maxMinSearch': " . $time . "<\n>";

