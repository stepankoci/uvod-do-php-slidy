<?php

$currentHour = (int)date('H');

// Podmínky

if ($currentHour > 6 && $currentHour < 22) {
    echo 'Den';
} else {
    echo 'Noc';
}

if ($currentHour === 12) {
    echo 'Poledne';
} elseif ($currentHour > 6 && $currentHour < 22) {
    echo 'Den';
} else {
    echo 'Noc';
}

// Cykly

$i = 1;
while ($i <= 12) {
    echo $i . ' ';
    $i = $i + 1;
}
// 1 2 3 4 5 6 7 8 9 10 11 12

for ($i = 1; $i <= 12; $i++) {
    echo $i . ' ';
}
// 1 2 3 4 5 6 7 8 9 10 11 12
