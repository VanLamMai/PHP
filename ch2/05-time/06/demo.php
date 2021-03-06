<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>jQuery UI Datepicker - Default functionality</title>
	<link rel="stylesheet" href="../css/jquery-ui.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<script src="../js/jquery-1.9.1.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function() {
		    $( "#datepicker" ).datepicker({
		    	dateFormat: "dd/mm/yy",
		    	defaultDate: "+3d",
		    	changeYear: true,
		    	changeMonth: true,
		    	yearRange: "2000:2021"
		    });
		});
	  </script>
</head>
<body>
	<div class="content">
		<h1>Exercise 01</h1>
		<?php
			$date = (isset ( $_POST ["datepicker"] )) ? $_POST ["datepicker"] : "";
		?>
	
		<form action="#" method="post" name="mainForm" id="mainForm">
			<div class="row">
				<span>Date: </span>
				<input readonly="readonly" type="text" id="datepicker" name="datepicker" value="<?php echo $date;?>" />
			</div>
			<div class="row">
			<input type="submit" value="Submit" />
			</div>
		</form>
	</div>
</body>
</html>