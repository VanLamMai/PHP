<?php
$number=20;
if($number%2==0)
{
    $result = "Số chẵn";
}else
{
    $result = "Số lẻ";
}
$result = ($number%2==0) ? "Số chẵn" : "";
echo $result;