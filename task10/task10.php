<?php

function secondsExchanger(int $seconds): int
{
    $hours = 0;
    $mins = 0;
    $sec = 0;

    if ($seconds < 0 || $seconds > 359999) {
        echo "Похибка вводу часу";
        return false;
    }

    if (($seconds % 60) == 0) {
        $mins = $seconds / 60;
    } elseif ($seconds > 60) {
        $mins = floor($seconds / 60);
        $sec = $seconds - ($mins * 60);
    } else {
        $sec = $seconds;
    }

    if (($mins % 60) == 0) {
        $hours = $mins / 60;
    } elseif ($mins > 60) {
        $hours = floor($mins / 60);
        $mins = floor(($seconds - (($hours * 60) * 60)) / 60);
    }

    if ($hours > 99) {
        echo "Досягнуто максимального часу";
        return false;
    }

    if ($sec < 10) {
        $sec = 0 . $sec;
    }
    if ($mins < 10) {
        $mins = 0 . $mins;
    }
    if ($hours < 10) {
        $hours = 0 . $hours;
    }
    echo $hours . ":" . $mins . ":" . $sec;
    return $sec . $mins . $hours;
}

secondsExchanger(359111);

