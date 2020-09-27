<?php
require_once("controller/session.php");
require_once("controller/connection.php");
require_once("controller/functions.php");
require("controller/createuser.php");
?>

<html>
	<head>
		<link rel="stylesheet" href="styles/css/newuser.css">
		<title>ShortCircuit | New user</title>
	</head>
	<body>
		<section id="main">
			<div id="loginContainer">
				<h2>Create new user</h2> 
				<p>To get started</p> 
					<form action="" method="post">

						<label for="user">USERNAME</label><br>
						<input type="text" name="user" maxlength="30" value="" /><br>

						<label for="pass">PASSWORD</label><br>
						<input type="password" name="pass" maxlength="30" value="" /><br>

						<input type="submit" name="submit" value="Create" />
					</form>
				<div id="bottomContainer">
				</div>
			</div>
		</section>
	</body>
</html>
<?php
if (isset($conn)){mysqli_close($conn);}
?>