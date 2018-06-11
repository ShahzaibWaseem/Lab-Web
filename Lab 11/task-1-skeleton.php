 <!DOCTYPE html>  
 <html>   
 <head>   
 	<title>Task-1</title>  
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
 </head>  
 <body>  

 	<?php  
	 	$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

	 	$month = explode(",", $month_temp);

	 	sort($month);
	 	echo "PHP is working!";
		//rest of the code here
		echo '<br>Average Temperature is : ', array_sum($month)/count($month);
		echo '<br>List of seven lowest Temperatures : ';
		for ($i=0; $i < 6; $i++) { 
			echo $month[$i], ', ';
		}
		echo '<br>List of seven highest Temperatures : ';
		for ($i= count($month) - 7; $i < count($month); $i++) { 
			echo $month[$i], ', ';
		}
 	?>  
 </body>
 </html>