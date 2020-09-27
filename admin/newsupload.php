<?php
require("../controller/includer.php");
confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../includes/head.php'?>
	<link rel="stylesheet" href="/style/css/index.css">
	<title>News uploader | Egeteknik</title>
</head>
<body>		
	<header>
		<?php include '../includes/nav.php'?>
	</header> 

	<section id="main">
		<form action="" method="post" enctype="multipart/form-data">
		<div id="upload">
			<div id="uploadFrame">
				<div id="uploadIMG">
					<input type="file" name="file">
				</div>
				<div id="uploadForm">
					<div id="title">
						<h3>TITLE </h3>
						<input type="text" name="title"/>
					</div>
					<div id="desc">
						<h3>DESCRIPTION</h3>
						<input type="text" name="description"/>
					</div>
						<input id="submit" type="submit" name="submit"/>
				</div>
			</div>
		</div>
		</form>
	</section>
</body>
</html>
<?php 
require("../controller/addnews.php");
?>
