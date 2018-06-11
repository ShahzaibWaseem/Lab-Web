<?php
// including the database connection file
include_once(".\config\config.php");

if(isset($_POST['add'])){	
	$enum = mysqli_real_escape_string($mysqli, $_POST['enum']);
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$ext = mysqli_real_escape_string($mysqli, $_POST['ext']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$offcode = mysqli_real_escape_string($mysqli, $_POST['offcode']);
	$reports = mysqli_real_escape_string($mysqli, $_POST['reports']);
	$job = mysqli_real_escape_string($mysqli, $_POST['job']);
	if (empty($reports)) {
		$reports = 'NULL';
	}
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($email) || empty($ext) || empty($offcode) || empty($job)) {
		if(empty($fname)) {
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		if(empty($lname)) {
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($ext)) {
			echo "<font color='red'>Extension field is empty.</font><br/>";
		}
		if(empty($offcode)) {
			echo "<font color='red'>Office Code field is empty.</font><br/>";
		}
		if(empty($job)) {
			echo "<font color='red'>Job field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "INSERT INTO employees VALUES ($enum, '$lname', '$fname', '$ext', '$email', '$offcode', $reports, '$job');");
		if ($result) {
			echo "<font color='green'>Employee added successfully!</font> Check <a href=\"index.php\">here</a>.<br/>";
		}
		else
			echo "<font color='red'>Operation failed! Try again.</font><br/>";
		$mysqli->close();
	}
}
?>

<html>
<head>	
	<title>Add Employee</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="add.php">
		<table border="0">
			<tr>
				<td>Employee Number</td>
				<td><input type="text" name="enum" value=""></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" value=""></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lname" value=""></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=""></td>
			</tr>
			<tr> 
				<td>Extension</td>
				<td><input type="text" name="ext" value=""></td>
			</tr>
			<tr> 
				<td>Office Code</td>
				<td><input type="text" name="offcode" value=""></td>
			</tr>
			<tr> 
				<td>Reports To</td>
				<td><input type="text" name="reports" value=""></td>
			</tr>
			<tr> 
				<td>Job Title</td>
				<td><input type="text" name="job" value=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="add" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
