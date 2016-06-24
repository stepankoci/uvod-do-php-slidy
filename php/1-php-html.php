<?php

// Jednoduchý program
// Vypíše se jen výstup (echo), co není ve značkách php zůstává nezměněno

$currentHour = date('G');

// Ve dne vypíšeme den a v noci noc.
if ($currentHour > 6 && $currentHour < 22) {
    $now = 'den';
} else {
    $now = 'noc';
}

?>

<p>
    Mimo bloky PHP může být HTML kód.<br>
    PHP je zpracováno pouze uvnitř PHP značek.<br>
    Cokoliv je mimo značky, zůstane tak jak je.
</p>

<p>
    <strong>

        Právě je <?php echo $now; ?>
        protože je <?php echo $currentHour; ?> hodin.

    </strong>
</p>