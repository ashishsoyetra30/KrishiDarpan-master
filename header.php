<header>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="pictures/logo.png" style="width:200px; height:50px; margin-left: 0px;">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php" style="font-size:20px; font-family: papyrus;">Home</a></li>
      <li class="active"><a href="practise.php" style="font-size:20px; font-family: papyrus;">FAQs</a></li>
	  <li class="active"><a href="About Us.php" style="font-size:20px; font-family: papyrus;">About Us</a></li>
    </ul>    
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	
    <ul class="nav navbar-nav navbar-right">
	<?php if(isset($_COOKIE['login']))
	{
			$admin=$_COOKIE['login'];
			
			include("root/db_connection.php");
		?>
      <li><a href="" style="font-size:20px; font-family:Century Gothic"><!--<span class="glyphicon glyphicon-user" style="font-size:20px"></span>--> <?php $query=$db->query("select username from user_info where id =$admin") or die("");
	  $result=$query->fetch(PDO::FETCH_ASSOC); ?> 
	  Welcome <?php echo $result['username'];
	  ?> </a></li>
	<li><a href="managebahi.php?id=<?php echo $admin ?>"  style="font-size:20px; font-family:Century Gothic"><!--<span class="glyphicon glyphicon-log-in" style="font-size:20px"></span>--> Dashboard</a></li>
  <li><a href="log-out.php"  style="font-size:20px; font-family:Century Gothic"><!--<span class="glyphicon glyphicon-log-in" style="font-size:20px"></span>--> Logout</a></li>

	<?php } else { ?>

	  <div class="dropdown" style="float:right; margin-top: -35px; margin-right: 5px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Registration
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="register1.php">As a farmer</a></li>
    <li><a href="regvendor.php">As a vendor</a></li>
   
  </ul>
</div>
<div class="dropdown" style="float:right; margin-top: -35px; margin-right: 130px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="login-page.php">As a farmer</a></li>
    <li><a href="login-vendor.php">As a vendor</a></li>
<?php } ?>
</ul>
</div>
  </div>
</nav>

</header>