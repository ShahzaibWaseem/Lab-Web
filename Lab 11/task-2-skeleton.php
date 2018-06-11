<!DOCTYPE html>  
<html>  
<head>   
	<title>Task-3</title>  
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
		table, tr, td {
			border:1px solid black;
		}
	</style>
</head>  
<body>
	<table>
		<?php  
			echo 'PHP is working';
			for ($i=1; $i <= 6; $i++) {
				echo '<tr>';
				for ($j=1; $j <= 5; $j++) {
					echo "<td>$i * $j =", ($i*$j),'</td>';
				}
				echo '</tr>';
			}
		?>
	</table>
</body>  
</html>  
