<?php
 // Include confi.php
 include_once('config.php');
 
 $jobid = isset($_GET['jobid']) ? mysql_real_escape_string($_GET['jobid']) :  "";
 if(!empty($jobid)){
   $qur = mysql_query("select * from `Jobs` WHERE jobid = '$jobid'") or die("Error in Selecting " . mysqli_error($connection));
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