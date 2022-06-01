<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin PUSKESMAS LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url(CONTENT/Gambar/BACKGROUNDLOGIN.png); background-size: 100%; back">

<div style="height: 1000px; position: relative;background: rgba(0, 0, 0, 0.2) ">

	<!-- KONTAINER LOGINN-->

	<div style="  ;position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); width: 400px; border: solid lightgreen 1px; border-radius: 5px" >

		<!--HEADER FORM-->

		<div style=" background-color:green; text-align: center; color: white; padding: 5px">LOGIN PUSKESMAS</div>

		<!-- FORM LOGIN-->

		<form action="/HomeMenu.php" class="was-validated border" style="  background-color: lightgreen;  padding: 20px;">

			<!--INPUT USERNAME-->

			<div class="mb-3 mt-3">
			  <label for="username" class="form-label">Username:</label>
			  <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<!--INPUT PASSWORD-->

			<div class="mb-3">
			  <label for="pwd" class="form-label">Password:</label>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<!--BUTTON SUBMIT-->

			<button type="submit" class="btn btn-primary ">Submit</button>
		</form>

	</div>
</div>
</body>
</html>

<?php
	if (isset($_POST["login"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];

		require("ConnectDB.php");

		$query = "select Nama_admin from admin ".
		"where Username = '$username' and Password = md5('$password')";

		$result = mysqli_query($conn, $query);
		$num = mysqli_num_rows($rersult);

	} 
 ?>

