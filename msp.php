<?php
include("root/db_connection.php");

$crop=$_REQUEST['crop'];
$rice=$_REQUEST['rice'];
$wheat=$_REQUEST['wheat'];
$dal=$_REQUEST['dal'];
$jute=$_REQUEST['jute'];
$paddy=$_REQUEST['paddy'];
$chana=$_REQUEST['chana']; 


$stmt = $conn->prepare("select * from msp where crop=$crop");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
}


    
         
        
  ?>
