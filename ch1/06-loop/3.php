<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Vẽ tam giác</title>
 <style>
 * {
  margin: 0;
  padding: 0;
}
.content {
  width: 600px;
  height: 400px;
  border: 1px solid green;
  margin: 20px auto;
  text-align: center;
}
h1 {
  text-align: center;
  padding: 10px 0;
  color: red;
}
.tam-giac {
  width: 100px;
  height: 100px;
  border: 2px solid red;
  display: inline-block;
  margin-left: 10px;
}
img {
  width: 100%;
  height: 100%;
}
.result {
  text-align: left;
  margin-left: 265px;
}
</style>
</head>
<body>
  <div class="content">
    <h1>Vẽ tam giác</h1>
    <div class="tam-giac"><a href="?type=1"><img src="images/01.png" alt=""></a></div>
    <div class="tam-giac"><a href="?type=2"><img src="images/02.png" alt=""></a></div>
    <div class="tam-giac"><a href="?type=3"><img src="images/03.png" alt=""></a></div>
    <div class="result">
    <?php
				$result = "";
				if(isset($_GET["type"])){
					$type = $_GET["type"];
					switch ($type) {
						case 1:
							$i = 1;
							$n = 6;
							while($i <= $n){
								$result .= str_repeat("*",$i) . "<br />";
								$i++;
							}
							break;
						case 2:
							$i = 6;
							$n = 6;
							while($i >= 1){
								$result .= str_repeat("*",$i) . "<br />";
								$i--;
							}
							break;
						case 3:
							$i = 1;
							$n = 6;
							/*
							 		$n = 6
							          *			i = 1, space = 5, * = 1	(space = n - i) (* = i * 2 - 1)
							         ***		i = 2, space = 4, * = 3
							        *****		i = 3, space = 3, * = 5
							       *******
							      *********
							     ***********
							*/
							while($i <= $n){
								$space  	= str_repeat("&nbsp;&nbsp;",$n - $i);
								$character  = str_repeat("*",2*$i - 1);
								$result .= $space . $character . "<br />"; 
								$i++;	
							}
							break;
						
					}
				} 
				echo $result;
			?>
  </div>
</body>
</html>