<?php

$first = [
    "first_name" => "Bekti"
];

$last = [
    "first_name" => "Fana",
    "last_name" => "Prihanto"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Bekti",
    "last_name" => "Prihanto"
];

$b = [
    "last_name" => "Prihanto",
    "first_name" => "Bekti"
];

var_dump($a == $b);
var_dump($a === $b);