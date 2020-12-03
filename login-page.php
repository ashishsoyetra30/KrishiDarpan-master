<?php
include("header.php");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>
<style>
body {
    background-color: #f8f8f8;
    background-image: url("pictures/image.jpg");
     margin-top: 0px;
}
.login-panel {
    margin-top: 15%;
}
.form_margin{
	margin-bottom:10px;
	font-weight:100
}
.form_margin input[type=checkbox] {
	margin-right:5px;
}
#loading_img{
	margin:0px; display:none;
}
.alert_pass{
	display:none;
}
.alert_fail{
	display:none;
}

 

   
</style>
    <body>
        <div class="container" style="min-height:527px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    	<form action="login-do.php" method="POST">
                            <fieldset>
                            	<div class="speech">
                                <div class="form-group">
                                	
                                    <input class="form-control" placeholder="Username" id="user_name" type="text" autofocus>
                                   
                                </div>
                                </div>
                                <div class="form-group">
                                	<div class="speech">

                                    <input class="form-control" placeholder="Password" id="user_pass" type="password" value="">
                                   
                                </div>
                            </div>
                                <button class="btn btn-lg btn-success btn-block submitBtn" type="button">Login</button>
								<p align="left" id="loading_img">
									<img src="loading2.gif" style="width:50px; height:50px;">
								</p>
								<p class="alert alert-success alert_pass">Successfully Login</p>
								<p class="alert alert-danger alert_fail">Invalid User</p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      

        <script src="js/jquery.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
       
		<script>
	$("#user_name").on("keyup",function(e){
		$("#user_name").css("border","1px solid #ccc");
		$(".alert_fail").css("display","none");
	});
	$("#user_pass").on("keyup",function(e){
		$("#user_pass").css("border","1px solid #ccc");
		$(".alert_fail").css("display","none");
	});
	$(".submitBtn").on("click",function(e){
		if($("#user_name").val()=="" || $("#user_name").val()==null)
		{
			$("#user_name").focus();
			$("#user_name").css("border","1px solid red");
		}
		else if($("#user_pass").val()=="" || $("#user_pass").val()==null)
		{
			$("#user_pass").focus();
			$("#user_pass").css("border","1px solid red");
		}
		else
		{
			
					var u_name=$("#user_name").val();
					var u_pass=$("#user_pass").val();
					$("#loading_img").css("display","block");
					$.ajax({
						type:"POST",
						data:{u_name:u_name,u_pass:u_pass},
						url:"login-do.php",
						success: function(reciveData){
							reciveData=reciveData.trim();	
							if(reciveData=="err"){
								$("#loading_img").css("display","none");							
								$("#user_name").focus();
								$("#user_name").css("border","1px solid red");
								$(".alert_fail").css("display","block");
								$("#user_pass").css("border","1px solid red");
							}
							else{
								$("#loading_img").css("display","none");
								$(".alert_pass").css("display","block");
								//alert(reciveData);
								window.location.replace('index.php');
							}
						}
					});
			
				
		}
	});
</script>
<?php
      include("footer.php");
	?>

    </body>

    </html>
