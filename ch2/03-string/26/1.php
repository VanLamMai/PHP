<?php

$str	= '"PHP" is \easy\ ';	// ' " \ -> \
$str = addcslashes($str);
echo $str;