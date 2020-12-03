<?php
include("root/db_connection.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
//fetching the username and passsword...
$query = "SELECT username, password from user_info where username=? AND password=? LIMIT 1";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: index.php"); // Redirecting To Profile Page
}
mysqli_close($db); // Closing Connection
}


?>