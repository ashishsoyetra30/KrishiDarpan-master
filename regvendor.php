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

        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Please Sign In</h3>
                    </div>
                     <div>
                        <?php
                        if(isset($_REQUEST['status']))
                        { 
                            $status=$_REQUEST['status'];
                         ?>
                                 <input   id="txt_hide" name="txt_hide"  type="hidden" value="<?php echo  $status; ?>" >
                     <?php   } else { ?>

                             <input   id="txt_hide" name="txt_hide"  type="hidden" value="0" >
                             <?php
                     }

                        ?>
                    </div>
                    <div class="panel-body">
                            <fieldset>
                                <form method="post" action="connectvendor.php" id="text_form">

                                <div class="form-group">
                                    <input class="form-control" placeholder="Firstname" name="firstname" id="firstname" type="text" autofocus>
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Lastname" name="lastname" id="lastname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" id="username"  value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" id="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder=" Confirm Password" name="conpassword" type="password" id="conpassword" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder=" store_name" name="store_name" id="store_name" type="text" value="">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder=" address" name="address" id="address" type="address" value="">
                                </div>


                                <div class="form-group">
                                    <input class="form-control" placeholder="district" name="district" type="text" id="district" value="">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Mobile" name="mobile" type="text" id="mobile" value="">
                                </div>


                                <button class="btn btn-lg btn-success btn_submit" type="button" name="btn_submit" style="margin-left:15 0px; ">register </button>

                            </form>
                             <form action="login-vendor.php" method="POST">
                                 <button class="btn btn-lg btn-success btn-block submitBtn" name="login" type="submit" value="login">Login</button>
                             </form>


                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
      include("footer.php");
    ?>

    <script src="js/jquery.js"></script>
 <script src="js/jquery.min.js"></script>
 <script>
    $(document).ready(function(){
        var status=$("#txt_hide").val();
       if(status!=0)
        {
        alert(status);
    }
    });
 </script>
 <script>
    $(".btn_submit").on("click",function(e)
    { 
        if($("#firstname").val()==""||$("#firstname").val()==null)
        {
            $("#firstname").focus();
            
        }
        else if($("#lastname").val()==""||$("#lastname").val()==null)
        {
            $("#lastname").focus();
            
            
        }
        
        else if($("#username").val()==""||$("#username").val()==null)
        {
            $("#username").focus();
            
            
        }

        else if($("#password").val()==""||$("#password").val()==null)
        {
            $("#password").focus();
            
            
        }
    
        else if($("#conpassword").val()==""||$("#conpassword").val()==null)
        {
            $("#conpassword").focus();
            
            
        }
    
       else if($("#store_name").val()==""||$("#store_name").val()==null)
        {
            $("#store_name").focus();
            
            
        }
        else if($("#address").val()==""||$("#address").val()==null)
        {
            $("#address").focus();
            
            
        }
         else if($("#district").val()==""||$("#district").val()==null)
        {
            $("#district").focus();
            
            
        }
            
        else if($("#mobile").val()==""||$("#mobile").val()==null)
        { 
            $("#mobile").focus();
            
            
        }
       

        else{
                $("#text_form").submit();
            }
    }
    );
</script>
</body>
</html>
								
