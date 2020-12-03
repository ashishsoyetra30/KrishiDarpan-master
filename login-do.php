  <?php

include("root/db_connection.php");
if(isset($_REQUEST['u_name']) && isset($_REQUEST['u_pass'])){	 
$username=str_replace("'","",$_REQUEST['u_name']);
$password=str_replace("'","",$_REQUEST['u_pass']);
$query=$db->query("select * from user_info where username='$username' and password='$password'") or die("error");	
if($query->rowCount()==0){ 
echo "err";
} else {
while($result=$query->fetch(PDO::FETCH_ASSOC)) {
if($username==$result['username'] && $password==$result['password']) {
$admin_id=$result['id'];
$expireTime=time()+60*60*24*30;
setcookie("login",$admin_id,$expireTime);
echo "successfully Login"; 

} else {
echo "err";
}
}
}
} else {
echo "err ";
}



?>

