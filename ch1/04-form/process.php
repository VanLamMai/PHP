<?php
$userName = $_POST["login"];
$passWord = $_POST["password"];

$result = ($userName == "admin" && $passWord == 123456)? "Đăng nhập thành công" : "Đăng nhập thất bại";
echo $result;