<?php
require("../controller/includer.php");
confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Egeteknik</title>
    <?php include '../includes/head.php'?>
    <link rel="stylesheet" href="/style/css/index.css">
</head>
<body>
    <header>
        <?php include '../includes/nav.php'?>
    </header>
    <a href="../controller/userlogout.php">Logout</a>
    <a href="newsupload">News</a>
    <?php echo $_SESSION['user_id'] ?>
    <?php echo $_SESSION['user'] ?>
    <?php echo $_SESSION['pass'] ?>
</body>
</html>