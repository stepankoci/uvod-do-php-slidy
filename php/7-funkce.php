<?php

// Vestavěné funkce

$date = date('d. m. Y');
//echo $date;

$type = gettype($date);
//echo $type;

// Vlastní funkce

function add($a, $b)
{
    return $a + $b;
}

//echo add(1, 2);

function greet($name)
{
    $currentHour = date('H');

    if ($currentHour > 6 && $currentHour < 22) {
        $greet = 'Dobrý den';
    } else {
        $greet = 'Dobrou noc';
    }

    return $greet . ' ' . $name;
}

//echo greet('Bob');