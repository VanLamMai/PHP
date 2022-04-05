<?php
$number = -21;
if($number%2==0)
{
    $result = "Số chẵn";
}else
{
    $result = "Số lẻ";
}
$result = ($number%2==0) ? "Số chẵn" : "Số lẻ";
echo $result;