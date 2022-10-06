<?php

class insertSort
{
    private array $array;

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function sort(): array // O(n^2) - квадратне порівнювання.
    {
        $count = count($this->array);
        if ($count <= 1) {
            return $this->array;
        }

        for ($i = 1; $i < $count; $i++) {
            $cur_val = $this->array[$i];
            $j = $i - 1;

            while (isset($this->array[$j]) && $this->array[$j] > $cur_val) {
                $this->array[$j + 1] = $this->array[$j];
                $this->array[$j] = $cur_val;
                $j--;
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

//$array = [111, 84, 55, 12, 2, 49, 63, 48, 56, 33, 18, 69, 70, 88, 48, 99, 1, 45, 46];
////$secondArr = [];
////for($i = 0; $i < 100; $i++){
////    $secondArr[] = rand(0, 500000);
////}
//$sorter = new insertSort($array);
//$sorter->showArray();
////$startTime = microtime(true);
//$sorter->sort();
////$endTime = microtime(true);
////$time = round($endTime - $startTime, 5);
////echo "Час роботи cортування Вставками: " . $time . "\n";
////$sorter->showArray();
//

