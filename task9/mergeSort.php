<?php

class mergeSort
{
    private array $array;

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function sort(array $array): array // O(n log n - лінійно логарифмичний ступінь важкості
    {

        $count = count($array);
        if ($count <= 1) {
            return $array;
        }

        $left = array_slice($array, 0, $count / 2);
        $right = array_slice($array, $count / 2);

        $left = $this->sort($left);
        $right = $this->sort($right);


        return $this->merge($left, $right);

    }

    public function merge(array $left, array $right): array
    {
        $ret = [];
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] < $right[0]) {
                array_push($ret, array_shift($left));
            } else {
                array_push($ret, array_shift($right));
            }
        }

        array_splice($ret, count($ret), 0, $left);

        array_splice($ret, count($ret), 0, $right);


        $this->array = $ret;
        return $this->array;
    }

    public function showArray(): bool
    {
        echo "<pre>";
        print_r($this->array);
        echo "</pre>";
        return true;

    }


}

$array = [
    12,
    5,
    56,
    4,
    30,
    45,
    23,
    20
];
//
//$sorter = new mergeSort($array);
//$sorter->showArray();
////$start = microtime(1);
//$sorter->sort($array);
////$end = microtime(1);
//$sorter->showArray();
////$time = round($end - $start, 10);
////echo "Час роботи Сортування зливом: $time";
//

