<?php

class SelectSort
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function sort(): array // O(n^2) - квадратна важкість.
    {
        $count = count($this->array);
        if ($count <= 1) {
            return $this->array;
        }

        for ($i = 0; $i < $count; $i++) {
            $k = $i;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($this->array[$k] > $this->array[$j]) {
                    $k = $j;
                }
                if ($k != $i) {
                    $tmp = $this->array[$i];
                    $this->array[$i] = $this->array[$k];
                    $this->array[$k] = $tmp;
                }
            }
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

//$sorter = new SelectSort($array);
//$sorter->showArray();
////$start = microtime(1);
//$sorter->sort();
////$end = microtime(1);
//$sorter->showArray();
////$time = round($end - $start, 6);
////echo "Час роботи функції $time секунд";
