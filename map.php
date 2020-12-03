
<html>
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

<div class="col-lg-8" style="margin-left:170px;">
	<div class="info"><a href="http://bhunaksha.cg.nic.in/" >BHUNAKSHA</a></div>
	<img src="pictures/bahi.jpg" class="img-circle person" alt="Random Name" width="200" height="200" style="margin-left:270px;>
</div>
<div class="col-lg-8" style="margin-left:170px;">
	<div class="info"><a href="https://bhuiyan.cg.nic.in/User/Selection_Report_For_KhasraDetail.aspx" >KHASRA INFORMATION</a></div>
	<img src="pictures/image1.jpg" class="img-circle person" alt="Random Name" width="200" height="200" style="margin-left:270px;>

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
