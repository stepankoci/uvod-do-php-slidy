<?php

$currentHour = date('H');

// Ve dne vypíšeme den a v noci noc.
if ($currentHour > 6 && $currentHour < 22) {
    echo 'Den';
} else {
    echo 'Noc';
}

?>

<p>
    Mimo bloky PHP může být HTML kód.
    PHP je zpracováno pouze uvnitř PHP značek.
    Cokoliv je mimo značky, zůstane tak jak je.
</p>
