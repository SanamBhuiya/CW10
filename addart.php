<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Artist to DB</title>
</head>

<body>
	<div>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "practice";
$port = 8889;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$name = $_POST["artist1"];

$sql = "INSERT INTO artists (name) VALUES('$name')";

if ($conn->query($sql) === TRUE) {
    echo "New artist successfully saved";
} else {
    echo "Error: New artist failed to be saved" . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
	<a href="displayTable.php"><input type="button" id="btn1" value="OK"></a>
	</div>
</body>

</html>