<?php

class API
{
    public function toString(array $array): string
    {
        $string = json_encode($array);
        echo $string;
        return $string;
    }

    public function toArray(string $string): array
    {
        $array = json_decode($string, true);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        return $array;
    }
}

$array = [
    "1",
    3 => 2,
    "third" => "3",
    4,
    "string",
    "value"];
$convertor = new API();
//$convertor->toArray($convertor->toString($array));

$data = $_REQUEST['data'];


switch ($_REQUEST['type']) {
    case'toArray':
        if (is_string($data)) {
            $convertor->toArray($data);
        } else {
            echo "error";
        }
        break;
    case 'toString':
        if (is_array($data)) {
            $convertor->toString($data);
        } else {
            echo "error";
        }
}
