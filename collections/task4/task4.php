<?php

$bool = true;
$list = [];
while ($bool === true) {

    echo "Ведіть номер автомобіля: ";

    $value = trim(fgets(STDIN));

    if (empty($value)) {
        echo " НІЧОГО НЕ ВВЕДЕНО \n";
    } elseif ($value == 'СТОП') {
        $bool = false;
    } elseif ($value == 'СПИСОК') {
        print_r($list);
    } else {
        $list[] = $value;
    }
}


