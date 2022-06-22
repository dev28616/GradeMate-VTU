<?php

$host 		= "localhost";
$user 		= "root";
$password 	= "";
$db_name 	= "db1";

$con = mysqli_connect($host,$user,$password,$db_name);


function validate($value)
{
	$value = trim($value);
	$value = stripslashes($value);
	$value = htmlspecialchars($value);
    
    return $value;
}

?>