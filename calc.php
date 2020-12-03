<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <?php
			include("root/db_connection.php");
		?>
 
</head>
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

<style type="text/css">
    {
		margin: 0;
		padding: 0;
	}
	h1{
		text align:center;
		text-shadow: 2px 3px 4px yellow;
	}
	table{
		line-height:1.8;
		padding:70px;
	}
	body{
		 background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pictures/image.jpg);
		
	}
	.form {
		width:800px;
		margin-left:auto;
		margin-right:auto;
		margin-top:50px;
		margin-botton:20px;
		min-height:400px;
	}

</style>

    		

</head>
<body>
    
<?php include("header.php");

 ?>
<div class="container">
	<div class="row">
	<div class="form">
	<form action="bahikhata.php" method="POST" id="text_form">
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Month</label>
		</div>
		<div class="col-lg-4">
	
		
			<select class="form-control" id="month" name="month">
				<option value="0">please select the month</option>
				<option value="january-june">january-june</option>
				<option value="july-december">july-december</option>
			</select>
			
			

		</div>
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Year</label>
		</div>
		<div class="col-lg-4">
			<select class="form-control" id="year" name="year">
				<option value="0">please select the year</option>
				<?php
				for($i=2010;$i<2030;$i++)
				{ ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			  <?php  }
			?>
				
			</select>
			
		</div>
		<br>
		<br>
		<br>
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Crop</label>
		</div>
		<div class="col-lg-4">
			<select class="form-control" id="crop" name="crop" action="msp.php" method='POST'>
				<option value="0">please select the crop</option>
				<option value="1" name="rice">Rice(MSP: 1835)</option>
				<option value="2" name="wheat">Wheat(MSP: 1840)</option>
				<option value="3" name="dal">Dal(MSP: 125)</option>
				<option value="3" name="jute">Jute(MSP: 3950)</option>
				<option value="4" name="paddy">Paddy(MSP: 65)</option>
				<option value="5" name="chana">Chana(MSP: 270)</option>
			</select>
		</div>
         <div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">production</label>
		</div>
		<div class="col-lg-4">
			<input id="production" name="production" value="" class="form-control" placeholder="total productiion in quintol">
		</div>
		<br>
		<br>
		<br>
	    <div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Seed</label>
		</div>
		<div class="col-lg-4">
			<input id="seed" name="seed" value="" class="form-control" placeholder="Cost of seed">
		</div>
		
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Fertilizer</label>
		</div>
		<div class="col-lg-4">
			<input id="fertilizer" name="fertilizer" value="" class="form-control" placeholder="Cost of Fertilizer">
		</div>
		<br>
		<br>
		<br>
		
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Pesticides</label>
		</div>
		<div class="col-lg-4">
			<input id="pesticides" name="pesticides"  value="" class="form-control" placeholder="Cost of Pesticides">
		</div>
		
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Labour</label>
		</div>
		<div class="col-lg-4">
			<input id="labour" name="labour"  value="" class="form-control" placeholder="Cost of Labour Charge">
		</div>
		<br>
		<br>
		<br>
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Maschinary</label>
		</div>
		<div class="col-lg-4">
			<input id="maschinary" name="maschinary"  value="" class="form-control" placeholder="Cost of maschinary">
		</div>
		
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Electricity</label>
		</div>
		<div class="col-lg-4">
			<input id="electricity" name="electricity"  value="" class="form-control" placeholder="Cost of Electricity">
		</div>
		<br>
		<br>
		<br>
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">Water</label>
		</div>
		<div class="col-lg-4">
			<input id="water"  name="water" value="" class="form-control" placeholder="Cost of Water used">
		</div>
		<br>
		<br>
		<br>
		<div class="col-lg-2">
			<label style="color:#fff; font-size:15px;">msp</label>
		</div>
		<div class="col-lg-4">
			<input id="msp"  name="msp" value="" class="form-control" placeholder="msp">
		</div>
		
		
		
		<div class="col-lg-6"> 
		<?php
		 if(isset($_COOKIE['login']))
	{
			$admin=$_COOKIE['login'];
			
		
		?>
		<input id="user_id" name="user_id" value="<?php echo $admin; ?>" class="form-control" type="hidden">
		<button class="btn btn-md btn-success btn_submit" type="submit" name="btn_submit"  style="margin-left:15	0px; ">submit </button>
<?php	
} else {  ?>

	<input class="btn btn-md btn-success" type="submit" name="submit" value="Submit" disabled style="margin-left:300px; ">
<?php } ?>
		</div>
</form>
	</div>
	</div>
</div>



  <?php
  include("footer.php");
  ?>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  
     
 <script>
	$(".btn_submit").on("click",function(e)
	{
		if($("#production").val()==""||$("#production").val()==null)
		{
			$("#production").focus();
			
		}
		else if($("#seed").val()==""||$("#seed").val()==null)
		{
			$("#seed").focus();
			
			
		}
		
		else if($("#fertilizer").val()==""||$("#fertilizer").val()==null)
		{
			$("#fertilizer").focus();
			
			
		}

		else if($("#labour").val()==""||$("#labour").val()==null)
		{
			$("#labour").focus();
			
			
		}
	
		else if($("#maschinary").val()==""||$("#maschinary").val()==null)
		{
			$("#maschinary").focus();
			
			
		}
	
	else	if($("#electricity").val()==""||$("#electricity").val()==null)
		{
			$("#electricity").focus();
			
			
		}
			
		else if($("#water").val()==""||$("#water").val()==null)
		{
			$("#water").focus();
			
			
		}
		else if($("#year option:selected").val()==0)
		{
			$("#year").focus();
			
			
		}
		else if($("#month option:selected").val()==0)
		{
			$("#month").focus();
			
			
		}
		else if($("#crop option:selected").val()==0)
		{
			$("#crop").focus();
			
			
		}


		else{
				$("#text_form").submit();
			}
	} 
	);
</script>
<script>
	aa=document.querySelector("#labour");
	<input id="msp" name="msp" value class="form-control" placeholder="msp">
	aa.value
	""
	aa.value =$result
	"$result"

	</script>
</body>
</html>