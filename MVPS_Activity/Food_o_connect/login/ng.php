	<?php

$Nname ="";
$Aname = "";
$Uname = "";
$Pass = "";
$Contact = "";
$N_sadd = "";
$N_sline = "";
$N_city = "";
$N_state = "";
$N_pin = "";
$N_country = "";
$Email = "";
$Wlink = "";
$Dfromation = "";



$errors = array();
$db= mysqli_connect('localhost', 'root', '', 'foodoconnetdb');

if (isset($_POST['submit']))
{
	$Nname = mysqli_real_escape_string($db,$_POST['NGO_name']);
	$Aname = mysqli_real_escape_string($db,$_POST['Admin_name']);
	$Uname = mysqli_real_escape_string($db,$_POST['User_name']);
	$Pass = mysqli_real_escape_string($db,$_POST['Password']);
	$Contact = mysqli_real_escape_string($db,$_POST['Contact']);
	$N_sadd = mysqli_real_escape_string($db,$_POST['N_address']);
	$N_sline = mysqli_real_escape_string($db,$_POST['N_line']);
	$N_city = mysqli_real_escape_string($db,$_POST['city']);
	$N_state = mysqli_real_escape_string($db,$_POST['street']);
	$N_pin = mysqli_real_escape_string($db,$_POST['zipcode']);
	$N_country = mysqli_real_escape_string($db,$_POST['country']);
	$Email = mysqli_real_escape_string($db,$_POST['email']);
	$Wlink = mysqli_real_escape_string($db,$_POST['Website_link']);
	$Dfromation = mysqli_real_escape_string($db,$_POST['Date_Of_formation']);
	$sql= "INSERT into ngo_registration(NGO_NAME,ADMIN_NAME,USERNAME,PASSWORD,CONTACT,STREET_ADDRESS,STREET_LINE,CITY,STATE,ZIPCODE,COUNTRY,EMAIL,WEBSITE_LINK,DATE_OF_FORMATION) values ('$Nname', '$Aname','$Uname','$Pass','$Contact','$N_sadd','$N_sline','$N_city','$N_state','$N_pin','$N_country','$Email','$Wlink','$Dfromation')";

	
	mysqli_query($db, $sql) OR die('FAILED TO LOAD UPDATE IN TABLE :'.mysqli_error($db));
	
	$_SESSION['USERNAME'] = $Uname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../dashboard.php');

 }
?>