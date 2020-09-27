<?php
// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
	$errors = array();

	// perform validations on the form data
	$username = trim(mysqli_real_escape_string($conn, $_POST['user']));
	$password = trim(mysqli_real_escape_string($conn, $_POST['pass']));
    $iterations = ['cost' => 5];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);

	$query = "INSERT INTO `user` (username, userpass) 
						VALUES ('{$username}', '{$hashed_password}')";
	$result = mysqli_query($conn, $query);
		if ($result) {
			$message = "User Created.";
			header("location: ../login");
		} else {
			$message = "User could not be created.";
			$message .= "<br />" . mysqli_error($conn);
		}
}

if (!empty($message)) {echo "<p>" . $message . "</p>";}
?>