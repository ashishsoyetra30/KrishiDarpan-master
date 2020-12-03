<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"">

  
 
</head>
<style>
body {
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pictures/fp7.jpg);
	margin:0px;
}
.heading {
	margin-top:60px;
}
.heading h1{
	color:#fff;
	font-size:50px;
	font-family:Brush Script MT;
	margin-left:0px;
    text-align: center;
    margin-top: -60px;
}
.info {
	border: 1px solid white;
	padding:10px 10px;
	color:#fff;
	text-decoration: none;
	font-size: 13px;
	margin:20px 1px 5px 1px;
	text-align:center; 
	font-family: Comic Sans MS;
}
.info a{
	text-decoration: none;
	color:#fff;
}
img{
	margin-left: 70px;
}
a:hover{
	background-color: pink;

}
</style>
<body>
<?php include("header.php"); ?>
<div class="container" style="min-height:527px;">
<div class="row">
<div class="col-lg-12 heading">
<h1>KRISHI DARPAN</h1>
</div>

<div class="col-lg-4">
	<div class="info"><a href="calc.php" >BAHI KHATA</a></div>
	<img src="pictures/bahi.jpg" class="img-circle person" alt="Random Name" width="200" height="200">
</div>
<div class="col-lg-4">
	<div class="info"><a href="cropmanag.php" >CROP MANAGEMENT</a></div>
	<img src="pictures/image1.jpg" class="img-circle person" alt="Random Name" width="200" height="200">

</div>
<div class="col-lg-4">
	<div class="info"><a href="Map.php" >GEOGRAPHICAL VIEW</a></div>
	<img src="pictures/ph.jfif" class="img-circle person" alt="Random Name" width="200" height="200">

</div><!-- closing of info -->
<div class="col-lg-4">
	<div class="info"><a href="govt sch.php" >GOVERNMENT PROGRAMMES</a></div>
	<img src="pictures/gp.jpg" class="img-circle person" alt="Random Name" width="200" height="200">
</div>

<div class="col-lg-4">
	<div class="info"><a href="vendorslist.php" >vendorslist LIST</a></div>
	<img src="pictures/fi1.jpg" class="img-circle person" alt="Random Name" width="200" height="200">
</div>
<div class="col-lg-4">
	<div class="info"><a href="practise.php" >FAQs</a></div>
	<img src="pictures/fAQ.jpg" class="img-circle person" alt="Random Name" width="200" height="200">
</div>
</div>
</div>

<?php
      include("footer.php");
	?>
	
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
  <script src="js/jquery.js"></script>
 <script src="js/jquery.min.js"></script>
  

</body>

</html>