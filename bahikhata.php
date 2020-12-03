<?php
if (isset($_COOKIE['login'])){
$user_id=$_REQUEST['user_id'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
$crop=$_REQUEST['crop'];
$production=$_REQUEST['production'];
$seed=$_REQUEST['seed'];
$fertilizer=$_REQUEST['fertilizer'];
$pesticides=$_REQUEST['pesticides'];
$labour=$_REQUEST['labour'];
$maschinary=$_REQUEST['maschinary'];
$electricity=$_REQUEST['electricity'];
$water=$_REQUEST['water'];

$sum=$seed+$fertilizer+$pesticides+$labour+$maschinary+$electricity+$water;


echo "Total expenditure is". $sum;


/*$seed = $_POST['seed'];
$fertilizer =  $_POST['fertilizer'];
$pesticides =  $_POST['pesticides'];
$labour =  $_POST['labour'];
$maschinary    =  $_POST['maschinary'];
$electricity =  $_POST['electricity'];
$water =  $_POST['water'];
$sum =  $_POST['sum']; */
$db = new PDO('mysql:host=localhost;dbname=registration;charset=utf8mb4','root','');
$q =$db->query("insert into bahikhata(user_id,month,year,crop,production,seed,fertilizer,pesticides,labour,maschinary,electricity,water,sum) values($user_id,'$month',$year,'$crop',$production,$seed,$fertilizer,$pesticides,$labour,$maschinary,$electricity,$water,$sum)") or die(" ");
echo"successfully added";
 
}
else
{ header("location:login-page.php");
}





?>