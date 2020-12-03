<?php

$expireTime=time()-60*60*24*30;
setcookie("login",' ',$expireTime);
header("location:index.php");
?>