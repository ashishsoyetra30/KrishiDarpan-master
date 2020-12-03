<?php
$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$username =  $_POST['username'];
$password =  $_POST['password'];
$conpassword=$_POST['conpassword'];
$store_name=$_POST['store_name'];
$address=$_POST['address'];
$district     =  $_POST['district'];
$mobile   =  $_POST['mobile'];

if (!empty($firstname) || !empty($lastname) || !empty($username) || !empty($password) || !empty($conpassword)  || !empty($store_name) || !empty($address) || !empty($district) || !empty($mobile))
{

	include("root/db_connection.php");

$sql=$db->query("select username from vendor_info where username='$username'");
if($sql->rowCount()==0  && $password==$conpassword){


$q =$db->query("insert into vendor_info(firstname,lastname,username,password,store_name,address,district,mobile) values('$firstname','$lastname','$username','$password','$store_name','$address','$district','$mobile')") or die(" ");

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

 header("location:regvendor.php?status=Data Saved successfully");

?>