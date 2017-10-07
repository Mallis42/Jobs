<?php
 // Include confi.php
 include_once('config.php');
 
 $employeeid = isset($_GET['employeeid']) ? mysql_real_escape_string($_GET['employeeid']) :  "";
 if(!empty($employeeid)){
   $qur = mysql_query("select * from `Employee` WHERE employeeid = '$employeeid'") or die("Error in Selecting " . mysqli_error($connection));
 $result =array();
 while($r = mysql_fetch_assoc($qur)){
 
 $result[] =  array_map('utf8_encode' , $r);
 }
  if (count($result) == 1) {
    $json = array("status" => 1 ,"info" => $result);
  }
  else{
     $json = array("status" => 2);
  }
 }else{
 $json = array("status" => 0);
 }
 @mysql_close($conn);
 
 /* Output header */
 header('Content-type: application/json');
 echo json_encode($json, JSON_UNESCAPED_UNICODE);
 
 ?>