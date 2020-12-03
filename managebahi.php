 
<?php
if (isset($_COOKIE['login'])){
	$login_id= $_COOKIE['login'];
 
include("root/db_connection.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="css/bootstrap.min.css">
  
 
</head>
<?php
	include("header.php");
?>
<body>
	<div class ="container" style="min-height: 600px">
		<div class="row">
		
<title> fetch the data</title>

    <table align="center" class="table table-striped" border="2px" style="width:300px line-height:30px;"">
		<tr>
			<th colspan="13"><h2>FARMER RECORD</h2></th>
		</tr>
		<tr>
			<th>s.no.</th>
			<th>month</th>
			<th>year</th>
			<th>crop</th>
			<th>production</th>
			<th>seed</th>
			<th>fertilizer</th>
			<th>pesticides</th>
			<th>labour</th>
			<th>maschinary</th>
			<th>electricity</th>
			<th>water</th>
			<th>sum</th>
		</tr>
		<?php
		
		$result=$db->query("select * from bahikhata where user_id=$login_id");
	       $i=0;  
  			while($rows=$result->fetch(PDO::FETCH_ASSOC))
  			{
  				$i++;
  		?>
		
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $rows['month']; ?></td>
			<td><?php echo $rows['year']; ?></td>
			<td><?php echo $rows['crop']; ?></td>
			<td><?php echo $rows['production']; ?></td>
			<td><?php echo $rows['seed']; ?></td>
			<td><?php echo $rows['fertilizer']; ?></td>
			<td><?php echo $rows['pesticides']; ?></td>
			<td><?php echo $rows['labour']; ?></td>
			<td><?php echo $rows['maschinary']; ?></td>
			<td><?php echo $rows['electricity']; ?></td>
			<td><?php echo $rows['water']; ?></td>
			<td><?php echo $rows['sum']; ?></td>
		</tr>
		<?php
	}
	     ?>

			</table>';
<?php	
	$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Output('activity_log_for_acs.pdf', 'I');
?>

</div>
</div>
	<?php 
	include("footer.php");
}
else 
{ header("location:login-page.php");
}
    ?>
</body>

	
</body>
</html>
	