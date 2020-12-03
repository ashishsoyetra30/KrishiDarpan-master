<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/buttons.datatables.min.css">
 <link rel="stylesheet" href="css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	body {
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pictures/fpv.jpg);
	margin:0px;
}
	.heading h1{
		text-align: center;
	}
.checked {
  color: orange;
}
</style>
<?php include("root/db_connection.php");?>
<body>
<?php include("header.php"); ?>
<div class="container" style="min-height:527px;">
<div class="row">
<div class="container">
  <div class="col-lg-12 heading">
<h1>VENDORS LIST</h1>
</div>
 <div class="col-lg-12">
  <div class="col-lg-3">
  <select class="form-control" id ="district">
  <option value="0">Select Any District</option>
  <option value="BALOD">BALOD</option>
   <option value="BALODA BAZAR">BALODA BAZAR</option>
    <option value="BALRAMPUR">BALRAMPUR</option>
	 <option value="BASTAR">BASTAR</option>
	  <option value="BEMETARA">BEMETARA</option>
	   <option value="BIJAPUR">BIJAPUR</option>
	    <option value="BILASPUR">BILASPUR</option>
		 <option value="DANTEWADA">DANTEWADA</option>
		  <option value="DHAMTARI">DHAMTARI</option>
		   <option value="DURG">DURG</option>
		    <option value="GARIABAND">GARIABAND</option>
			 <option value="JANJGIR-NAILA">JANJGIR-NAILA</option>
			  <option value="JASHPUR">JASHPUR</option>
			   <option value="KABIRDHAM">KABIRDHAM</option>
			    <option value="KANKER">KANKER</option>
				 <option value="KONDAGAON">KONDAGAON</option>
				  <option value="KORBA">KORBA</option>
				   <option value="KORIYA">KORIYA</option>
				    <option value="MAHASAMUND">MAHASAMUND</option>
					 <option value="MUNGELI">MUNGELI</option>
					  <option value="NARAYANPUR">NARAYANPUR</option>
					   <option value="RAIPUR">RAIGARH</option>
					    <option value="RAIPUR">RAIPUR</option>
						 <option value="RAJNANDGAON">RAJNANDGAON</option>
						  <option value="SUKMA">SUKMA</option>
						   <option value="SURAJPUR">SURAJPUR</option>
						    <option value="SARGUJA">SARGUJA</option>
             </select>
			 </div>
			 <div class ="col-lg-1">
			 
<button type="button" class="btn btn-primary btn_submit">search</button>
			 </div>
			  <div class ="col-lg-1">
			 
<button type="button" class="btn btn-primary btn_reset">Reset</button>
			 </div>
	</div>	
  <table id="example1" class="table table-middle datatable table-bordered table-condensed table-hover">
    <thead style="background:#000;color:#fff">
      <tr> 
        <th>Sr No.</th>
        <th>PERSONAL INFO</th>
		<th>STORE NAME</th>
		
		<th>District</th>
		<th>Address</th>
		<th>Review</th>
		<?php if(isset($_COOKIE['login'])){ ?>
		<th>Rating</th>
		<?php } ?>
      </tr>
    </thead>
    <tbody  >
	 <?php if(isset($_REQUEST['value'])){
    $edit_id=str_replace("'","",$_REQUEST['value']);
    $editQ=$db->query("select * from vendor_info where district='$edit_id'") or die("");
	$i =0;
    while($cd=$editQ->fetch(PDO::FETCH_ASSOC))
	{  
      $i++; ?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cd['firstname']."  ".$cd['lastname']; ?><br><?php echo $cd['mobile']; ?></td>
        <td><?php echo $cd['store_name']; ?></td>
		 <td><?php echo $cd['district']; ?></td>
		<td><?php echo $cd['address']; ?></td>
		<td><?php echo $cd['review']."/5"; ?><?php $review=$cd['review']; $i=0; for($i=0; $i<=4; $i++) { if($i<floor($review)){ ?> <span class="fa fa-star checked" data-index="<?php echo $i; ?>"></span> <?php } else { ?>
		<span class="fa fa-star " data-index="<?php echo $i; ?>"></span><?php } }?></td>
		<?php if(isset($_COOKIE['login'])){ 
		$a_id=$cd['id'];
		$c_q=$db->query("select farmer_id from rating where rateid=$a_id and farmer_id=$admin") or die("");
		  if($c_q->rowCount()==0){ ?>
		<input type="hidden" value="<?php echo $admin; ?>"  id="hide">
		<td><span class="fa fa-star " id="<?php echo $cd['id']."_0"; ?>" data-index="0"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_1"; ?>" data-index="1"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_2"; ?>" data-index="2"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_3"; ?>" data-index="3"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_4"; ?>" data-index="4"></span></td>
		<?php }  else { $result1=$c_q->fetch(PDO::FETCH_ASSOC); 
		if($result1['farmer_id']!=$admin){   ?>
		<input type="hidden" value="<?php echo $admin; ?>"  id="hide">
		<td><span class="fa fa-star " id="<?php echo $cd['id']."_0"; ?>" data-index="0"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_1"; ?>" data-index="1"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_2"; ?>" data-index="2"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_3"; ?>" data-index="3"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_4"; ?>" data-index="4"></span></td>
		<?php }   else { ?><td>Thank You For Your Response</td><?php } } }?>  
		
      </tr>
	  
	  <?php
		
		
	}
	
	}
	else {
	 $ab=$db->query("select * from vendor_info");
	$i=0;
	while($cd=$ab->fetch(PDO::FETCH_ASSOC))
	{ $i++; ?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cd['firstname']."  ".$cd['lastname']; ?><br><?php echo $cd['mobile']; ?></td>
        <td><?php echo $cd['store_name']; ?></td>
		
		 <td><?php echo $cd['district']; ?></td>
		<td><?php echo $cd['address']; ?></td>
		<td><?php echo $cd['review']."/5"; ?><?php $review=$cd['review']; $i=0; for($i=0; $i<=4; $i++) { if($i<floor($review)){ ?> <span class="fa fa-star checked" data-index="<?php echo $i; ?>"></span> <?php } else { ?>
		<span class="fa fa-star " data-index="<?php echo $i; ?>"></span><?php } }?></td>
		
		<?php if(isset($_COOKIE['login'])){ 
		$a_id=$cd['id'];
		$c_q=$db->query("select farmer_id from rating where rateid=$a_id and farmer_id=$admin") or die("");
		  if($c_q->rowCount()==0){ ?>
		<input type="hidden" value="<?php echo $admin; ?>"  id="hide">
		<td><span class="fa fa-star " id="<?php echo $cd['id']."_0"; ?>" data-index="0"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_1"; ?>" data-index="1"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_2"; ?>" data-index="2"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_3"; ?>" data-index="3"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_4"; ?>" data-index="4"></span></td>
		<?php }  else { $result1=$c_q->fetch(PDO::FETCH_ASSOC); 
		if($result1['farmer_id']!=$admin){   ?>
		<input type="hidden" value="<?php echo $admin; ?>"  id="hide">
		<td><span class="fa fa-star " id="<?php echo $cd['id']."_0"; ?>" data-index="0"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_1"; ?>" data-index="1"></span>
            <span class="fa fa-star " id="<?php echo $cd['id']."_2"; ?>" data-index="2"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_3"; ?>" data-index="3"></span>
            <span class="fa fa-star" id="<?php echo $cd['id']."_4"; ?>" data-index="4"></span></td>
		<?php }   else { ?><td>Thank You For Your Response</td><?php } } ?>  		
      
	<?php } } } ?>
	</tr>
	
 
    </tbody>
  </table>
</div>
</div>
</div>

<?php include("footer.php"); ?>
	
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
  <script src="js/jquery.js"></script>
 <script src="js/jquery.min.js"></script>

  <script src="js/jquery.dataTables.min.js"></script>

	  
  <script type="text/javascript">
    $(function()
  {
	  $('#example1').DataTable({
		  "paging":true,
		  "lenghthChange":true,
		  "searching":true,
		  "ordering":true,
		  "info":true,
		  "autowidth":true,
		  dom: 'Bfrtip',
		  buttons: [
		       'excel','pdf','print'
			   ]
	  });
  });
  </script>
  <script>
  var ratedIndex = -1;
	var ratedValue = -1

  	$('.fa-star').on('click',function(){
  		var id = $(this).attr("id");
		var value=id.split("_");
		ratedIndex=value[1];
		ratedValue=value[0];
		var id=$("#hide").val();
		$.ajax({
			type:"POST",
			url:"save_rating.php",
			data:{vendor_id:ratedValue,rating:ratedIndex,id:id},
			success:function(r_data){
				alert(r_data);
				location.reload();
			},
			error:function(err){
			}
		});
  		});

  	$('.fa-star').mouseover(function(){
		
		var id = $(this).attr("id");
  		var currentIndex = parseInt($(this).data('index'));
		var cur_id = id.split("_");
		resetcolor(id);
  		for(var i=0;i<= currentIndex; i++)
  			$('#'+cur_id[0]+'_'+i).addClass('checked');
  		});

    
  	$('.fa-star').mouseleave(function(){
		
		var id = $(this).attr("id");
		var cur_id = id.split("_");
		resetcolor(id);
  		if(ratedIndex !=-1)
  		for(var i=0;i<= ratedIndex; i++)
  			$('#'+ratedValue+'_'+i).addClass('checked');
  		});

   function resetcolor(id)
   {   
    //  var id = $(this).attr("id");
	//   var cur_id = id.split("_");
	//   for(var i=0;i<= ratedIndex; i++)
		var cur_id = id.split("_");
		for(var i=0;i<=4;i++)
	       $('#'+cur_id[0]+'_'+i).removeClass('checked');
   }
 
  	
  </script>
  <script>
 $(".btn_submit").on("click",function(e){
	 
	 var value=$("#district option:selected").val();
	 
	 window.location.replace("vendorslist.php?value="+value+"");
	
 });
 $(".btn_reset").on("click",function(e){
	 
	 window.location.replace("vendorslist.php");
	
 });
 </script>
  
</body>
</html>