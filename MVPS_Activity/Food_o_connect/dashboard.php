<?php
session_start();

  if(isset($_SESSION['success'])) 
  {
  	echo $_SESSION['success'];
  	echo "Successful";
  }
?>