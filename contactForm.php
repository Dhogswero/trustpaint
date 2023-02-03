<?php

if (isset($_POST['submit'])){

	$_name = $_POST['name'];
	$_email = $_POST['email'];
	$_message = $_POST['message'];

	$mailTo = "msizahope@edhope.co.za";
	$headers = "From: ".$_email;
	$txt = "You have an message from: ".$_name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: index.html");
}


?>