<?php

function formatTime($timestamp, $full = false): string
{
    $now = new DateTime;
    $ago = (new DateTime())->setTimestamp($timestamp);
    $diff = $now->diff($ago);

    $diffData = [
        'y' => $diff->y,
        'm' => $diff->m,
        'w' => floor($diff->d / 7),
        'd' => $diff->d % 7,
        'h' => $diff->h,
        'i' => $diff->i,
    ];

    $units = [
        'y' => ['год', 'года', 'лет'],
        'm' => ['месяц', 'месяца', 'месяцев'],
        'w' => ['неделя', 'недели', 'недель'],
        'd' => ['день', 'дня', 'дней'],
        'h' => ['час', 'часа', 'часов'],
        'i' => ['минута', 'минуты', 'минут'],
    ];

    $result = [];

    foreach ($diffData as $k => $v) {
        if ($v > 0) {
            $word = getRussianPlural($v, $units[$k]);
            $result[] = "$v $word";
        }
    }

    if (!$full && !empty($result)) {
        $result = [$result[0]];
    }

    if ($diff->i == 0 && $diff->h == 0 && $diff->d == 0 && $diff->m == 0 && $diff->y == 0) {
        return 'только что';
    }

    if (!$diff->invert) {
        return 'через' . ' ' . implode(', ', $result);
    } else {
        return implode(', ', $result) . ' ' . 'назад';
    }
}

function getRussianPlural($number, $forms) {
    $n = abs($number) % 100;
    $n1 = $n % 10;

    if ($n > 10 && $n < 20) return $forms[2];
    if ($n1 > 1 && $n1 < 5) return $forms[1];
    if ($n1 == 1) return $forms[0];
    return $forms[2];
}
?>