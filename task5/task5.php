<?php

function parser(string $fileName): array
{
    $xml = simplexml_load_file($fileName);
    return json_decode(json_encode((array)$xml), TRUE);

}

//function getData(array $array, string $data)
//{
//    if (empty($array)) {
//        echo "Спарсіть ваш документ за допомогою функції parser()";
//    } else {
//        if (array_key_exists($data, $array)) {
//            foreach ($array as $key => $value){
//                if ($key == $data){
//                    echo $key . "=> " . $data;
//                } else {
//                    foreach ($key as $k => $value){
//                        if ()
//                    }
//                }
//            }
//        } else {
//            echo "У масиві немає тегу" . $data;
//        }
//    }
//}

function searchKey($searchKey, array $arr, array &$result)
{
    if (isset($arr[$searchKey])) {
        $result[] = $arr[$searchKey];
    }
    foreach ($arr as $key => $param) {
        if (is_array($param)) {
            searchKey($searchKey, $param, $result);
        }
    }
}

$result = [];


$fileName = "example.xml";
$array = parser($fileName);
echo "<pre>";
print_r($array);
echo "<pre>";

searchKey('rating', $array, $result);
var_dump($result);