<?php
	if (isset($_POST['submit'])) { // Form has been submitted.
		$username = trim(mysqli_real_escape_string($conn, $_POST['user']));
		$password = trim(mysqli_real_escape_string($conn,$_POST['pass']));

		$query = "SELECT userid, username, userpass FROM user WHERE username = '{$username}' LIMIT 1";
		$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) == 1) {
				$found_user = mysqli_fetch_array($result);
                if(password_verify($password, $found_user['userpass'])){
					$_SESSION['user_id'] = $found_user['userid'];
					$_SESSION['user'] = $found_user['username'];
					$_SESSION['pass'] = $found_user['userpass'];
					redirect_to("/admin/dashboard");
			} else {
				$message = "Username/password combination incorrect";
			}}
	} else {
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
	}
	
if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>