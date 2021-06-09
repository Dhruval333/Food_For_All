<?php 
$host="localhost";
$user= "root";
$pass= "";
$db= "foodoconnetdb";

$db1 = mysqli_connect($host, $user, $pass, $db);
//msql_select_db($db);

if (isset($_POST['log'])) 
{
	$Uname = $_POST['username'];
	$pass1 = $_POST['password'];

	$sql = "SELECT * FROM user_registration where USER_NAME='".$Uname."'AND PASSWORD= '".$pass1."'limit 1";

	$result = mysqli_query($db1,$sql);
	if(mysqli_num_rows($result) == 1)
	{
		while($row = $result->fetch_assoc()) {
		echo "First Name : " . $row["FIRST_NAME"]." <br> Last Name : " .$row["LAST_NAME"]. "<br> Contact : " . $row["CONTACT"]." <br> Email: " . $row["EMAIL"]." <br>  Address : ". $row["STREET_ADDRESS"].",".$row["STREET_LINE"].",".$row["CITY"].",".$row["STATE"]."<br>Pin Code : ".$row["ZIPCODE"]."<br>";

		}exit();
	}

	else
	{
		echo " Wrong User name or password ";
		exit();
	}
}
