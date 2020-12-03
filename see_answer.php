
<!DOCTYPE html>
<html>
<head>
	<title>FAQs</title>
</head>
<style>
	body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pictures/question2.jpg);
	background-size: 1600px 1850px;
}

</style>
<body>
	<?php 
     include("header.php");
	?>
	<div style="text-align: center; color: #fff;font-size: 20px">
<?php
include("root/db_connection.php");
$id=$_REQUEST['ques_id'];
$ab=$db->query("select * from question_master where id=$id");
$cd=$ab->fetch(PDO::FETCH_ASSOC);
echo $cd['question'];


?>
<br>
<br>
<?php
$ef=$db->query("select * from answer_master where question_id=$id  order by id desc ");
while($gh=$ef->fetch(PDO::FETCH_ASSOC))
{
 echo $gh['answer'];
?>
<br>
<br>
<?php
}

?>
<button class="btn btn-md btn-info" type="button" ><a href="practise.php">Back</a></button>
</div>
<?php
      include("footer.php");
	?>
</body>
</html>

