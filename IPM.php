<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="css/bootstrap.min.css">
  
 
</head>
<style>
body {
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pictures/fp7.jpg);
}
h1{
	text-align: center;
	color: #fff;
	text-decoration: underline;
	font-family: Comic Sans MS;
}
h2{
	color: #fff;
	font-family: papyrus;
}
p
{
	color: yellow;
}

info{
	color:#fff; 
	font-family: papyrus;
	font-size: 20px;


}
span{
	color: yellow;
	font-family: Comic Sans MS;
	font-size: 15px;
}
</style>
<body>
<?php include("header.php"); ?>
<div class="container" style="min-height:527px;">
<div class="row">	
<h1>Integrated Pest Management</h1>
<h2>What is IPM?</h2>
<p>Integrated pest management, or IPM, is a process you can use to solve pest problems while minimizing risks to people and the environment. IPM can be used to manage all kinds of pests anywhere–in urban, agricultural, and wildland or natural areas.</p>
<li><span id="s1"><info>How Does IPM Work?</info></span><br>
	<span id="s2">1. IPM focuses on long-term prevention of pests or their damage by managing the ecosystem.<br>
                  2. With IPM, you take actions to keep pests from becoming a problem, such as by growing a healthy crop that can withstand pest attacks, using disease-resistant plants, or caulking cracks to keep insects or rodents from entering a building.<br>
	              3. In IPM, monitoring and correct pest identification help you decide whether management is needed.<br>
                  4. Monitoring means checking your field, landscape, forest, or building—or other site—to identify which pests are present, how many there are, or what damage they've caused. Correctly identifying the pest is key to knowing whether a pest is likely to become a problem and determining the best management strategy.<br>

                  5. After monitoring and considering information about the pest, its biology, and environmental factors, you can decide whether the pest can be tolerated or whether it is a problem that warrants control.</span></li><br>

<li><span id="s1"><info>IPM Programs:</info></span><br>
	<span id="s2">These IPM principles and practices are combined to create IPM programs. While each situation is different, six major components are common to all IPM programs:<br>1.Pest identification.<br>
                         2. Monitoring and assessing pest numbers and damage.<br>
                         3. Guidelines for when management action is needed.<br>
                         4. Preventing pest problems.<br>
                         5. Using a combination of biological, cultural, physical/mechanical and chemical management tools.<br>
                         6. After action is taken, assessing the effect of pest management.<br>
                     </span></li><br>
 </div>
 </div>
<?php
      include("footer.php");
	?>                    

</body>
</html>