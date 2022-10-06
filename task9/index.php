<?php

require_once 'bubble.php';
require_once 'insertSort.php';
require_once 'mergeSort.php';
require_once 'quickSort.php';
require_once 'selectSort.php';
require_once 'shellSort.php';


$array = [];

for ($i = 0; $i < 350; $i++) {
    $array[] = rand(0, 1000);
}

$bubble = new Bubble($array);
$insert = new insertSort($array);
$merge = new mergeSort($array);
$quick = new quickSort($array);
$select = new selectSort($array);
$shell = new shellSort($array);


$start = microtime(1);
$bubble->sort();
$end = microtime(1);
$time = round($end - $start, 8);
echo "Час роботи сортування бульбашковим методом: $time \n";

$start = microtime(1);
$insert->sort();
$end = microtime(1);
$time = round($end - $start, 8);
echo "Час роботи сортування вставним методом: $time \n";

$start = microtime(1);
$merge->sort($array);
$end = microtime(1);
$time = round($end - $start, 8);
echo "Час роботи сортування зливаючим методом: $time \n";

$start = microtime(1);
$quick->sort(0, 349);
$end = microtime(1);
$time = round($end - $start, 8);
echo "Час роботи сортування швидким методом: $time \n";

$start = microtime(1);
$select->sort();
$end = microtime(1);
$time = round($end - $start, 8);
echo "Час роботи сортування вибірковим методом: $time \n";

$start = microtime(1);
$shell->sort();
$end = microtime(1);
$time = round($end - $start, 8);
echo "Час роботи сортування методом Шела: $time \n";


