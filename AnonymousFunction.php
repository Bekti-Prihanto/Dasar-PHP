<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Bekti");
$sayHello("Prihanto");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Bekti", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Bekti", $filterFunction);

$firstName = "Bekti";
$lastName = "Prihanto";

$sayHelloBekti = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloBekti();

$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloBekti();
