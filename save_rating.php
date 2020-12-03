<?php 
include("root/db_connection.php");
$vendor_id=$_REQUEST['vendor_id'];
$rating=$_REQUEST['rating'];
$id=$_REQUEST['id'];
$rating=$rating+1;
$q=$db->query("insert into rating(rateid,rating,farmer_id) values($vendor_id,$rating,$id)") or die("");
echo"Rating Saved Successfully";
$c_q=$db->query("select rating from rating where rateid=$vendor_id") or die("");
$sum=0;
$count=$c_q->rowCount();
if($count>=0){
while($result=$c_q->fetch(PDO::FETCH_ASSOC)){
	$sum=$sum+$result['rating'];
}
}
$total=$sum/($count);
$v_q=$db->query("update vendor_info set review=$total where id=$vendor_id") or die("");
?>