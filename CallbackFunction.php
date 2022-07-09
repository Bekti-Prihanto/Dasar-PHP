<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Bekti", "strtoupper");
sayHello("Bekti", "strtolower");
sayHello("Bekti", function (string $name): string {
    return strtoupper($name);
});
sayHello("Bekti", fn($name) => strtoupper($name));