<?php


if(isset($_POST['sub']))
{


$username  = $_POST['username'];
$email	   = $_POST['email'];

$xml =new DOMDocument("1.0","UTF-8");

$file = "student.xml";

$xml->load($file);

$roottag = $xml->getElementsByTagName("root")->item(0);

$tageuser = $xml->createElement("Username");

$tageuserText = $xml->createTextNode($username);

$tageuser->appendChild($tageuserText);

$tagemail = $xml->createElement("email");

$tagemailText = $xml->createTextNode($email);

$tagemail->appendChild($tagemailText);

$roottag->appendChild($tageuser);

$roottag->appendChild($tagemail);

$xml->save($file);








}








?>	


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	Username <br>
	<input type="text" name="username">
	<br>
	email <br>
	<input type="text" name="email"><br>
	<input type="submit" value="submit" name="sub">

</form>

</body>
</html>
