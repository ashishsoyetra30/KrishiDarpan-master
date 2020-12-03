<?php
$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$username =  $_POST['username'];
$password =  $_POST['password'];
$conpassword=$_POST['conpassword'];
$city     =  $_POST['city'];
$mobile   =  $_POST['mobile'];

if (!empty($firstname) || !empty($lastname) || !empty($username) || !empty($password) || !empty($conpassword) || !empty($city) || !empty($mobile))
{

	include("root/db_connection.php");

$sql=$db->query("select username from user_info where username='$username'");
if($sql->rowCount()==0  && $password==$conpassword){


$q =$db->query("insert into user_info(firstname,lastname,username,password,city,mobile) values('$firstname','$lastname','$username','$password','$city','$mobile')") or die(" ");

echo"successfully added";
}
else
echo "already username exist or passsword and confirm password dosent match";
}
else
{

	echo"PLEASE FILL ALL THE FIELDS PRESENT IN SIGN UP BOX";
	
	die(" ");
}

 header("location:register1.php?status=Data Saved successfully");

?>