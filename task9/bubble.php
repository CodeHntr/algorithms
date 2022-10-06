<?php

class Bubble
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function sort(): array // On^2 - квадратна важкість
    {
        $size = count($this->array) - 1;
        for ($i = $size; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i - 1); $j++) {
                if ($this->array[$j] > $this->array[$j + 1]) {
                    $k = $this->array[$j];
                    $this->array[$j] = $this->array[$j + 1];
                    $this->array[$j + 1] = $k;
                }
            }
        }
        //$this->showArray();
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

//$array = [154, 15, 48, 45, 16, 77, 65, 66, 61];
////$startTime = microtime(1);
//$sorter = new Bubble($array);
//$sorter->showArray();
//$sorter->sort();
////$endTime = microtime(1);
////$time = round($endTime - $startTime, 6);
////echo "Час роботи метода $time";
//
