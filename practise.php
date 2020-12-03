
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

<div col-lg-12 style="text-align: center;color: pink;text-decoration: underline;font-family: Comic Sans MS;">
<h1>FAQs</h1>



<?php

include("root/db_connection.php");
$ab=$db->query("select * from question_master");
while($cd=$ab->fetch(PDO::FETCH_ASSOC))
{
 $id = $cd['id'];
 echo  " QUESTION :-    ";
 echo $cd['question'];
  
 ?>
 <br>
 <br>
 <?php

  
$ef=$db->query("select * from answer_master where question_id=$id  order by id desc limit 1");
while($gh=$ef->fetch(PDO::FETCH_ASSOC))
{
echo " ANSWER :-   ";
 echo $gh['answer'];

}
?>
<br>

<form action="addans.php" method="POST">
	<div id="ans">
<textarea rows="4" cols="50" name="answer" style="color:black">Write Your Answer Here ......</textarea>
</div>
<input type="hidden" value="<?php echo $id;    ?>" name="questionid">
<button class="btn btn-md btn-info" type="submit" style="color: #fff">Add answer</button>
<button class="btn btn-md btn-success" type="button"><a href="see_answer.php?ques_id=<?php echo $cd['id']; ?>">see more</a></button>
</form>
<br>
<br>
<?php

}

?>
<form action="addquestion.php" method="POST">
	<div id="ans">
<textarea rows="4" cols="50" name="question" style="color: black">Write Your Answer Here ......</textarea>
</div>
<input type="hidden" value="<?php echo $id;    ?>" name="questionid">
<button class="btn btn-md btn-info" type="submit" >Add question</button>
</form>

  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <?php
      include("footer.php");
	?>
</div>
</body>
</html>