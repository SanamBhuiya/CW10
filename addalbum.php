<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>New Album Form</title>
</head>
<body>
	<div>
			<h3>New Album</h3>
			<form action="addAlbToDB.php" method="POST">
			<p>Artist: <input name="artist" type="text"></p>
			<p>Album Name: <input name="name" type="text"></p>
			<p>Genre: <input name="genre" type="text"></p>
			<p>Released Year: <input name="rdate" type="number" value="2000"></p>	
			<input type="submit" id="btn2" value="Add new album">
			</form>
			<a href="login.php"><input type="button" id="btn1"  value="Cancel"></a>
	</div>
</body>
</html>