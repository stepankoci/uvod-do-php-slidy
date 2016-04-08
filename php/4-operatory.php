<?php

// Základní operátory

// Operátor přiřazení
$name = 'Bob';

// Aritmetické operátory
$a = 10;
$b = 2;

$c = $a + $b; // $c = 12
$c = $a - $b; // $c = 8
$c = $a * $b; // $c = 20
$c = $a / $b; // $c = 5

// Operátory řetězců znaků (string operators)
$firstName = 'Dale';
$lastName = 'Cooper';

$fullName = $firstName . ' ' . $lastName; // $fullName = 'Date Cooper'

// Operátory porovnání (hodnot)
$c = $a === $b; // $c = false
$c = $a !== $b; // $c = true

$c = $a < $b; // $c = false
$c = $a > $b; // $c = true

$c = $a <= $b; // $c = false
$c = $a >= $b; // $c = true

// Logické operátory
$c = true || false; // $c = true
$c = true && false; // $c = false
