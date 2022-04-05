<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Break - Continue</title>
  <style>
      .content4 {
	margin: 20px auto;
	width:  600px;
	border: 1px solid #999;
	padding: 10px;
}

.content4 h1 {
	color: red;
	text-align: center;
}

.content4 div.result{
	margin-left:  320px;
}

.content4 div.question{
	margin-top: 20px;
	text-align: center;
}

.content4 div.question p{
	margin-top: 5px;
}

.content4 div.question p:last-child{
	text-align: right;
	font-style: italic;
	margin-top: 20px;
}

.content4 div.answer p{
	font-weight: bold;
}

.content4 div.answer ul{
	margin: 15px 0 0 10px;
	list-style: decimal inside;
}

.content4 div.answer ul li{
	line-height: 22px;
}

</style>
</head>
<body>
	<div class="content4">
		<h1>Giải câu đố bằng vòng lặp</h1>
		<div class="question">
			<p>Yêu nhau cau sáu bổ ba</p>
			<p>Ghét nhau cau sáu bổ ra làm mười</p>
			<p>Mỗi người một miếng trăm người</p>
			<p>Có mười bảy quả hỏi người ghét yêu</p>
			<p>Hỏi có bao nhiêu người yêu nhau, ghét nhau ?</p>
		</div>
		<div class="answer">
			<p>Đáp án</p>
			<ul>
			<?php
				for ($x = 1; $x <= 17; $x++)
                for ($y = 1; $y <= 17; $y++) {
                  if (3*$x + 10*$y == 100 && $x + $y == 17) {
                    echo 3*$x . ' người yêu nhau' . ',' . 10*$y . ' người ghét nhau';
                  }
            
                }
			?>
			</ul>
		</div>
	</div>