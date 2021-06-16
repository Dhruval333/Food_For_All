<?php
$AFOOD = "";
$CHARITY = "";
$FUNDS = "";
$VOLUNTEER = "";
$PEOPLE_DATA = "";
$LOCATION = "";


$errors = array();
$db= mysqli_connect('localhost', 'root', '', 'foodoconnetdb');

if (isset($_POST['update']))
{
	$AFOOD = mysqli_real_escape_string($db,$_POST['AMOUNT_OF_FOOD']);
	$FUNDS = mysqli_real_escape_string($db,$_POST['FUNDS']);
	$CHARITY = mysqli_real_escape_string($db,$_POST['CHARITY']);
	$VOLUNTEER = mysqli_real_escape_string($db,$_POST['VOLUNTEER']);
	$PEOPLE_DATA = mysqli_real_escape_string($db,$_POST['PEOPLE_DATA']);
	$LOCATION = mysqli_real_escape_string($db,$_POST['LOCATION']);
	$sql= "INSERT into data_update(AMOUNT_OF_FOOD,FUNDS,CHARITY,VOLUNTEER,LOCATION,PEOPLE_DATA) values ('$AFOOD', '$FUNDS','$CHARITY','$VOLUNTEER','$PEOPLE_DATA','$LOCATION')";

	mysqli_query($db, $sql) OR die('FAILED TO LOAD UPDATE IN TABLE :'.mysqli_error($db));


	echo "<script>alter('hello')</script>;";
	
	// $_SESSION['AFOOD'] = "You have updated data";
  	$_SESSION['success'] = "You have updated data";
  	header('location: ../dashboard.php');
	  
 }
?>
