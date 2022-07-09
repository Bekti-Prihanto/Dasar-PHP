<?php

function createName()
{
    $name = "Bekti"; // local scope
}

createName();
echo $name . PHP_EOL;
