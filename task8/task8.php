<?php

$result = [];
$second = [];
$weight = [
    140, 69, 80, 150, 68, 63, 72, 54, 120, 65, 85, 90, 63, 81, 41
];

foreach ($weight as $value) {
    $val = 0;
    $num = str_split($value);
    if (count($num) == 2) {
        $val = $num[0] + $num[1];
    } elseif (count($num) === 3) {
        $val = $num[0] + $num[1] + $num[2];
    }
    $result[$value] = $val;
}

asort($result);

foreach ($result as $key => $value) {
    $second[] = [
        'weight' => $key,
        'decoded' => $value
    ];
}

for ($i = (count($second) - 1); $i>= 0; $i--) {
    for ($j =0; $j<=($i - 1); $j++) {
        if (isset($second[$i + 1]['decoded']) && $second[$i]['decoded'] == $second[$i + 1]['decoded']) {
            $fst = str_split(sprintf('%s', $second[$i]['weight']));
            $scnd = str_split(sprintf('%s', $second[$i + 1]['weight']));
            if ($fst[0] > $scnd[0]) {
                $left = $second[$i];
                $right = $second[$i + 1];
                $second[$i] = $right;
                $second[$i + 1] = $left;
            }
        }
    }

}
$str = "";

foreach ($second as $value) {
    if (is_array($value)) {
        $str .= $value['weight'] . " ";
    }
}

echo "Результат сортування: <br>" . "<strong>" . $str . "</strong>";

echo "<pre>";
print_r($second);
echo "</pre>";