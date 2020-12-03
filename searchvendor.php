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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"">
</head>
<style>
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
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
    $query = "SELECT * FROM `vendor_info` WHERE CONCAT('id', 'firstname', 'lastname','store_name','address','district') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM 'vendor_info'";
    $search_result = filterTable($query);
}
?>
<table id="example1" class="table table-middle datatable table-bordered table-condensed table-hover" action="searchvendor.php" method="POST">
    <thead style="background:#000;color:#fff">
      <tr> 
        <th>Sr No.</th>
        <th>PERSONAL INFO</th>
        <th>STORE NAME</th>
        <th>Address</th>
        <th>Review</th>
        <th>Rating</th>
      </tr>
    </thead>
    <tbody  >
    <?php $ab=$db->query("select * from vendor_info");
    $i=0;
    while($cd=$ab->fetch(PDO::FETCH_ASSOC))
    { $i++; ?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cd['firstname']."  ".$cd['lastname']; ?><br><?php echo $cd['mobile']; ?></td>
        <td><?php echo $cd['store_name']; ?></td>
        <td><?php echo $cd['address']; ?></td>
        <td><?php echo $cd['review']; ?></td>
        <td><span class="fa fa-star "></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></td>
        
      </tr>
    <?php } ?>
    
 
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
  
</body>
</html>
