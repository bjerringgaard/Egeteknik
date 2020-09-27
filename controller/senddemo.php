<?php
if(isset($_POST['submit'])){
	$to = "mba-98@live.dk";
	$from = $_POST['email'];
	$demotype = $_POST['demotype'];
	$name = $_POST['name'];
	$company = $_POST['company'];
	$phone = $_POST['phone'];
	
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	echo "email wrong";
	}
	
	elseif (empty($from) || empty($name) || empty($company)){
	echo "Empty field";
	}
	
	else{
	$subject = "FYSISK DEMO: " . $company;
	$body = "
FYSISK DEMO bestilt af: 
{$name} 
fra {$company}

KONTAKT INFO:
Email: {$from} 
Telefon: {$phone}

DEMOTYPE:
{$demotype}
	";
	mail($to, $subject, $body, "From: $from");
	header("location: demo.php?status=Succes");
	}
}

elseif(isset($_POST['online'])){
	$to = "mba-98@live.dk";
	$from = $_POST['email'];
	$demotype = $_POST['demotype'];
	$name = $_POST['name'];
	$company = $_POST['company'];
	$phone = $_POST['phone'];
	
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	echo "email wrong";
	}
	
	elseif (empty($from) || empty($name) || empty($company)){
	echo "Empty field";
	}
	
	else{
	$subject = "ONLINE DEMO: " . $company;
	$body = "
ONLINE DEMO bestilt af: 
{$name} 
fra {$company}

KONTAKT INFO:
Email: {$from} 
Telefon: {$phone}

DEMOTYPE:
{$demotype}
	";
	mail($to, $subject, $body, "From: $from");
	header("location: demo.php?status=OnlineSucces");
	}
}
?>