<?php

echo 'Name : ';
echo 'Bekti Prihanto ';
echo "\n";

echo "Name : ";
echo "Bekti\t Prihanto \n";

echo <<<Bekti
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

Bekti;

echo <<<'Bekti'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
Bekti;
