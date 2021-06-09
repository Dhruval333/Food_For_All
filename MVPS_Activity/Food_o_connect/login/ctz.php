<?php
// Start the session
session_start();

$Fname ="";
$Lname = "";
$Uname = "";
$Password = "";
$Contact = "";
$C_sadd = "";
$C_sline = "";
$C_city = "";
$C_state = "";
$C_pin = "";
$C_country = "";
$Email = "";
$username_exist = 0;
$email_exist = 0;
$username_exist_errormsg = "";
$email_exist_errormsg = "";
 
$errors = array();
$db= mysqli_connect('localhost', 'root', '', 'foodoconnetdb');

if (isset($_POST['submit']))
{
	$Fname = mysqli_real_escape_string($db,$_POST['First_Name']);
	$Lname = mysqli_real_escape_string($db,$_POST['Last_Name']);
	$Uname = mysqli_real_escape_string($db,$_POST['User_Name']);
	$Password = mysqli_real_escape_string($db,$_POST['Password']);
	$Contact = mysqli_real_escape_string($db,$_POST['Contact']);
	$C_sadd = mysqli_real_escape_string($db,$_POST['C_address']);
	$C_sline = mysqli_real_escape_string($db,$_POST['C_line']);
	$C_city = mysqli_real_escape_string($db,$_POST['city']);
	$C_state = mysqli_real_escape_string($db,$_POST['state']);
	$C_pin = mysqli_real_escape_string($db,$_POST['zipcode']);
	$C_country = mysqli_real_escape_string($db,$_POST['country']);
	$Email = mysqli_real_escape_string($db,$_POST['email']);

	

// first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_registration WHERE USER_NAME='$Uname' OR EMAIL='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  // if ($user) 
  // { // if user exists
    if ($user['USER_NAME'] === $Uname) 
    {
      $username_exist_errormsg = "Username already exists";
      $username_exist = 1;
    }
    else if ($user['EMAIL'] === $Email)
     {
     $email_exist_errormsg = "email already exists";
     $email_exist = 1;
    }
  // }
  
  // // Finally, register user if there are no errors in the form
  if ($username_exist == 0 && $email_exist == 0)
   {

  	$password = md5($password_1);//encrypt the password before saving in the database

  }
  $sql = "INSERT into user_registration(FIRST_NAME,LAST_NAME,USER_NAME,PASSWORD,CONTACT,STREET_ADDRESS,STREET_LINE,CITY,STATE,ZIPCODE,COUNTRY,EMAIL) values ('$Fname','$Lname','$Uname','$Password','$Contact','$C_sadd','$C_sline','$C_city','$C_state','$C_pin','$C_country','$Email')";

	
	
	mysqli_query($db, $sql) OR die('FAILED TO LOAD UPDATE IN TABLE :'.mysqli_error($db));

  	$_SESSION['USER_NAME'] = $Uname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../dashboard.php');

}

?>