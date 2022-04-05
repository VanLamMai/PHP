<?php
$number = 88;
$n = $number % 2;

$resultFirst = ($number >= 0)? "Nguyên dương" : "Nguyên âm";
$resultLast = ($n == 0)? "chẵn" : "lẻ";
$result = $resultFirst . " " . $resultLast;
echo $result;