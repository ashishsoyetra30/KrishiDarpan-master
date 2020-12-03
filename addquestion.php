<?php
$addquestion=$_REQUEST['question'];

include("root/db_connection.php");
$q =$db->query("insert into question_master(question) values('$addquestion')") or die(" ");

header("location:practise.php?status=Data Saved successfully");

?>



