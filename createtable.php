<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>
You have successfully logged in
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db_db = "practice";
$db_port = 8889;

$conn = new mysqli(
	$servername,
	$username,
	$password,
	$db_db,
	$db_port
);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE albums (artist VARCHAR(20), name VARCHAR(50), genre VARCHAR(20), rdate INT(4))";
if ($conn->query($sql) === TRUE) {
} else {

echo "Album table already exits. Click OK to continue.<br/>";
}

$sql = "CREATE TABLE artists (name VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
} else {

echo "Artists table already exists. Click OK to continue.<br/>";
echo mysqli_error($conn);
}

$conn->close();
?>  

	<div>
		<a href="addAlbum.php"><input type="button" id="btn1"  value="OK"></a>
		<a href="login.php"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	</div>
</body>

</html>