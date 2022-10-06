<?php

class shellSort
{
    private array $array;

    public function __construct($array)
    {
        $this->array = $array;
    }


    public function sort(): array
    {
        $elements = $this->array;
        $length = count($elements);
        $k = 0;
        $gap[0] = $length / 2;

        while ($gap[$k] > 1) {
            $k++;
            $gap[$k] = $gap[$k - 1] / 2;
        }

        for ($i = 0; $i <= $k; $i++) {
            $step = $gap[$i];

            for ($j = $step; $j < $length; $j++) {
                $temp = $elements[$j];
                $p = $j - $step;
                while ($p >= 0 && $temp < $elements[$p]) {
                    $elements[$p + $step] = $elements[$p];
                    $p = $p - $step;
                }
                $elements[$p + $step] = $temp;
            }
        }

        $this->array = $elements;
        //$this->showArray();
        return $this->array;

    }

    public function showArray()
    {
        echo "<pre>";
        print_r($this->array);
        echo "</pre>";
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

//$sorter = new shellSort($array);
//$start = microtime(1);
//$sorter->sort();
//$end = microtime(1);
//$time =  round($end - $start, 6);
//echo "Час роботи Сортировки Шела: $time \n";