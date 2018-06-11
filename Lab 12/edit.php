<?php
// including the database connection file
include_once(".\config\config.php");

if(isset($_POST['update'])){	

	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$ext = mysqli_real_escape_string($mysqli, $_POST['ext']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	$offcode = mysqli_real_escape_string($mysqli, $_POST['offcode']);
	$report = mysqli_real_escape_string($mysqli, $_POST['report']);
	$job = mysqli_real_escape_string($mysqli, $_POST['job']);
	if (empty($reports)) {
		$reports = 'NULL';
	}
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($ext) || empty($email) || empty($offcode) || empty($job)) {	
		$_POST['id'] = $id;
		
		if(empty($fname)) {
			echo "<font color='red'>First Namefield is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}

		if (empty($ext)) {
			echo "<font color='red'>Extension field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($offcode)) {
			echo "<font color='red'>Office Code field is empty.</font><br/>";
		}
		
		if(empty($report)) {
			echo "<font color='red'>Reports To field is empty.</font><br/>";
		}
		
		if(empty($job)) {
			echo "<font color='red'>Job Title field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE employees SET firstName='$fname',lastName='$lname', email='$email', extension='$ext', officeCode='$offcode', reportsTo=$reports, jobTitle = '$job' WHERE employeeNumber = ".$_POST["id"].";");
		
		$mysqli->close();
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>


<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM employees WHERE employeeNumber = $id;");
$result = mysqli_fetch_array($result);
$mysqli->close();
?>


<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php?id=<? echo $_GET['id']; ?>" >
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="fname" value="<?php echo $result["firstName"];?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lname" value="<?php echo $result["lastName"];?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $result["email"];?>"></td>
			</tr>
			<tr> 
				<td>Extension</td>
				<td><input type="text" name="ext" value="<?php echo $result["extension"];?>"></td>
			</tr>
			<tr> 
				<td>Office Code</td>
				<td><input type="text" name="offcode" value="<?php echo $result["officeCode"];?>"></td>
			</tr>
			<tr> 
				<td>Reports To</td>
				<td><input type="text" name="reports" value="<?php echo $result["reportsTo"];?>"></td>
			</tr>
			<tr> 
				<td>Job Title</td>
				<td><input type="text" name="job" value="<?php echo $result["jobTitle"];?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
