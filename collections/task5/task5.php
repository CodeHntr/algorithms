<?php

require_once './task9/bubble.php';
require_once './task9/insertSort.php';
require_once './task9/mergeSort.php';
require_once './task9/quickSort.php';
require_once './task9/selectSort.php';
require_once './task9/shellSort.php';


class StaticRegulator
{

    public static function sortBubble($array): void
    {
        $bubble = new Bubble($array);
        $start = microtime(1);
        $bubble->showArray();
        $bubble->sort();
        $bubble->showArray();
        $end = microtime(1);
        $time = round($end - $start, 8);
        echo "Час роботи сортування бульбашковим методом: $time \n";
    }


    public static function sortInsert($array): void
    {
        $insert = new InsertSort($array);
        $start = microtime(1);
        $insert->showArray();
        $insert->sort();
        $insert->showArray();
        $end = microtime(1);
        $time = round($end - $start, 8);
        echo "Час роботи сортування вставним методом: $time \n";


    }

    public static function sortMerge($array): void
    {
        $merge = new mergeSort($array);
        $start = microtime(1);
        $merge->showArray();
        $merge->sort($array);
        $merge->showArray();
        $end = microtime(1);
        $time = round($end - $start, 8);
        echo "Час роботи сортування зливаючим методом: $time \n";
    }

    public static function sortQuick($array): void
    {
        $quick = new QuickSort($array);
        $start = microtime(1);
        $quick->showArray();
        $quick->sort(0, 99);
        $quick->showArray();
        $end = microtime(1);
        $time = round($end - $start, 8);
        echo "Час роботи сортування швидким методом: $time \n";

    }

    public static function sortSelect($array): void
    {
        $select = new SelectSort($array);
        $start = microtime(1);
        $select->showArray();
        $select->sort();
        $select->showArray();
        $end = microtime(1);
        $time = round($end - $start, 8);
        echo "Час роботи сортування вибірковим методом: $time \n";
    }

    public static function sortShell($array): void
    {
        $shell = new ShellSort($array);
        $start = microtime(1);
        $shell->showArray();
        $shell->sort();
        $shell->showArray();
        $end = microtime(1);
        $time = round($end - $start, 8);
        echo "Час роботи сортування методом Шела: $time \n";

    }

}

$array = [];

for ($i = 0; $i < 100; $i++) {
    $array[] = rand(0, 100);
}

StaticRegulator::sortBubble($array);
StaticRegulator::sortInsert($array);
StaticRegulator::sortMerge($array);
StaticRegulator::sortQuick($array);
StaticRegulator::sortSelect($array);
StaticRegulator::sortShell($array);