<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Break - Continue</title>
</head>
<body>
	<?php
		$n  = 0;
		for($i = 0; $i <= 100; $i+=8){
			if($n < 3) {
				if($i % 8 == 0 && $i > 0) {
					echo $i . "<br />";
					$n++;
				}
			} else {
				break;
			}
		} 
	?>
</body>
</html>