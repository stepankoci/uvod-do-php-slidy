<?php

$currentHour = date('H');

// If - podmínky

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
while ($i < 10) {
    echo $i;
}

for ($i = 1; $i < 10; $i++) {
    echo $i;
}

