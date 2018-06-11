<!DOCTYPE html>  
<html>   
<head>   
	<title>Task-3</title>  
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
		table {
			border:1px solid black;
		}
	</style>
</head>  
<body>   
	<h3>Chess Board - PHP Nested Loops</h3>  
	<!-- cell 270px wide (8 columns x 60px) -->  
	<table>
		<?php  
		echo 'PHP is working!';
	        //your code here
			for($row = 1; $row <= 8; $row++){
				echo "<tr>";
				for($col = 1; $col <= 8; $col++){
					$total = $row + $col;
					if($total % 2 == 0)
						echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
					else
						echo "<td height=30px width=30px bgcolor=#000000></td>";
				}
				echo "</tr>";
			}
		?>
	</table>  
</body>  
</html> 