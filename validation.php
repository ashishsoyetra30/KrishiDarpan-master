<?php
$firstnameerr=$lastnameerr=$usernameerr=$passworderr=$cityerr=$mobileerr="";
$firstname=$lastname=$username=$password=$city=$mobile="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["firstname"])) {
		$firstnameerr="Name is required";
	}else{
		$firstname=test_input($_POST["firstname"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameerr = "Only letters and white space allowed";	
	}
}
if(empty($_POST["lastname"])) {
		$lastnameerr="Name is required";
	}else{
		$lastname=test_input($_POST["lastname"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameerr = "Only letters and white space allowed";	
	}
}
if (empty($_POST["username"])) {
    $usernamerr = "Email is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if e-mail address is well-formed
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
      $usernameerr = "Invalid email format";
    }
  }
  if (empty($_POST["password"])) {
    $passworderr = "Password is required";
  } 
   if (empty($_POST["city"])) {
    $cityerr = "city is required";
  }  if (empty($_POST["mobile"])) {
    $mobileerr = "mobile number  is required";
  } 

  
if (!empty($firstname) || !empty($lastname) || !empty($username) || !empty($password) || !empty($conpassword) || !empty($city) || !empty($mobile))
{

	include("root/db_connection.php");


$q =$db->query("insert into user_info(firstname,lastname,username,password,city,mobile) values('$firstname','$lastname','$username','$password','$city','$mobile')") or die(" ");

echo"successfully added";
}
else
{

	echo"PLEASE FILL ALL THE FIELDS PRESENT IN SIGN UP BOX";
	
	die(" ");
}
  
 ?>