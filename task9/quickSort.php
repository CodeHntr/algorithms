<?php

class QuickSort
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function sort($low, $high): array|bool // O(n log2n) - лінійно логарифмитичний пошук.
    {
        if (!isset($this->array[$high])) {
            $count = count($this->array);
            echo "Невірно вказаний останній індекс елемента, у масиві $count елементів";
            return false;
        }
        $i = $low;
        $j = $high;
        $mid = $this->array[($i + $j) / 2];
        do {
            while ($this->array[$i] < $mid) {
                $i++;
            }
            while ($this->array[$j] > $mid) {
                $j--;
            }
            if ($i <= $j) {
                $temp = $this->array[$i];
                $this->array[$i] = $this->array[$j];
                $this->array[$j] = $temp;
                $i++;
                $j--;
            }
        } while ($i < $j);

        if ($low < $j) {
            $this->sort($low, $j);
        }

        if ($i < $high) {
            $this->sort($i, $high);
        }

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
    111,
    84,
    55,
    12,
    2,
    49,
    63,
    48,
    56,
    33,
    18,
    69,
    70,
    88,
    48,
    99,
    1,
    45,
    46
];
//
//$sorter = new QuickSort($array);
//$sorter->showArray();
////$start = microtime(1);
//$sorter->sort(0, 18);
////$end = microtime(1);
//$sorter->showArray();
////$time = round($end - $start, 6);
////echo "Функція виконана за $time секунд";