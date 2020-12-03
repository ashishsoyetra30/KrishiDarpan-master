
<!DOCTYPE html>
<html>
<head>
	<title>FAQs</title>
</head>
<style>
	body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pictures/question2.jpg);
	background-size: 1600px 1650px;
}

</style>
<body>
	<?php 
     include("header.php");
	?>

<?php
$questionid=$_REQUEST['questionid'];
$addans=$_REQUEST['answer'];
include("root/db_connection.php");
$q =$db->query("insert into answer_master(question_id,answer) values($questionid,'$addans')") or die(" ");


header("location:practise.php?status=Data Saved successfully");

?>
</body>
</html>