<?php
//including the database connection file
include_once(".\config\config.php");

$result = mysqli_query($mysqli,"SELECT employees.employeeNumber, CONCAT(employees.firstName, employees.lastName) AS name, employees.email, employees.jobTitle, CONCAT(offices.addressLine1, ' ',offices.addressLine2, ' ', offices.city, ' ', offices.state, ' ', offices.country) as address, CONCAT(emp.firstname, ' ', emp.lastname, ', ', emp.jobTitle) AS report FROM employees INNER JOIN offices ON employees.officeCode = offices.officeCode LEFT OUTER JOIN employees AS emp ON emp.employeeNumber = employees.reportsTo;");
if (!$result) {
	printf("Error: %s\n", mysqli_error($mysqli));
	exit();
}
?>

<html>
<head>	
	<title>Homepage</title>
	<style>
		table {
			width: 100%;
		}
	</style>
</head>

<body>
	<a href="add.php">Add New Data</a><br/><br/>

	<h1> User Table </h1>
	<table width='80%' border=0>

		<tr bgcolor='#CCCCCC'>
			<th>Name</th>
			<th>Email</th>
			<th>Job Title</th>
			<th>Emp Office Address</th>
			<th>Reports To</th>
			<th>Update</th>
		</tr>
		<?php 
		while($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['jobTitle']."</td>";
			echo "<td>".$res["address"]."</td>";
			echo "<td>".$res["report"]."</td>";
			echo "<td><a href=\"edit.php?id=$res[employeeNumber]\">Edit</a> | <a href=\"delete.php?id=$res[employeeNumber]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";		
		}
		$mysqli->close();
		?>
	</table>
</body>
</html>
