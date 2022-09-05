<?php

$array = [];
$count = 0;

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


function linearSearch($numsArray)
{
    $keymax = 0;
    $keymin = 0;
    $max = 0;
    $min = 0;
    $i = 0;

    foreach ($numsArray as $key => $value) {
        if ($i == 0) {
            $max = $value;
            $min = $value;
            $i = 1;
        }

        if ($value > $max) {
            $max = $value;
            $keymax = $key;
        } elseif ($value < $min) {
            $min = $value;
            $keymin = $key;
        }
    }

    echo "Індекс максимального значення: " . $keymax . " Саме максимальне значення: " . $max . "<\n>";
    echo "Індекс мінімального значення: " . $keymin . " Саме мінімальне значення: " . $min . "<\n>";
    return $keymax . $keymin . $max . $min;
}

echo "<pre/>";
print_r($array);
echo "<pre/>";

$start = microtime(true);
linearSearch($array);
$time = round(microtime(true) - $start, 6);
echo "\n" . $time;


//
//function binarySearch(array $array, $item, $start = 0, $end = null)
//{
//    if ($end === null) {
//        $end = count($array) - 1;
//    }
//
//    if ($start > $end) {
//        throw new LogicException("Item not found");
//    }
//
//    $halfIndex = (int)(($start + $end) / 2);
//
//    if ($array[$halfIndex] !== $item) {
//        if ($array[$halfIndex] < $item) {
//            $start = $halfIndex + 1;
//        } else {
//            $end = $halfIndex - 1;
//        }
//
//        return binarySearch($array, $item, $start, $end);
//    }
//    return $halfIndex;
//}
//
//echo "<br>" . binarySearch($array, $item);
