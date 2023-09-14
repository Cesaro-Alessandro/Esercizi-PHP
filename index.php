<?php
include 'computer.php';

$computers = [];
$nC = 5;

for ($i = 0; $i < $nC; $i++) 
{
    $cpu = readline("Inserire caratteristiche CPU");
    $ram = readline("Inserire caratteristiche RAM");
    $hdd = readline("Inserire caratteristiche HDD");

    $computers[$i] = new computer($cpu, $ram, $hdd);
}