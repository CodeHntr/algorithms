<?php

$str = "";

if ($str == null ){
    $str = readline("Введіть ваше рівняння з дужками:");
}

function requireStr($str): bool
{
    $open = 0;
    $close = 0;

    $array = str_split(str_replace(" ", "", $str));
    foreach ($array as $value){
        if ($array[0] == ")" || $array[0] == "}" || $array[0] == "]") {
            return false;
        }
        if ($value == "(" || $value == "{" || $value == "[" ){
            $open++;
        } elseif ($value == ")" || $value == "}" || $value == "]"){
            $close++;
        }
        if($close > $open){
            return false;
        }
    }
    if ($open != $close){
        return false;
    }
    return true;
}

if (requireStr($str)){
    echo "Рівняння  $str написано правильно";
} else {
    echo "Рівняння $str написано неправильно";
}
