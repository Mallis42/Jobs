<?php
// Include config.php database connection
include_once('config.php');
 
 // Get data
 $f_name = isset($_Get['fname']) ? mysql_real_escape_string($_GET['fname']) : "";
 $l_name = isset($_GET['lname']) ? mysql_real_escape_string($_GET['lname']) : "";
 $email = isset($_GET['email']) ? mysql_real_escape_string($_GET['email']) : "";

 // Insert data into data base
 $sql = "INSERT INTO `Employee` (firstname, lastname,email ) VALUES ('$f_name', '$l_name' , '$email');";                                                 
 $qur = mysql_query($sql);
 if($qur){
 $json = array("status" => 1, "msg" => "Done Adding Person!");
 }else{
 $json = array("status" => 2, "msg" => "Error Adding Person! with : " . $f_name . " " . $l_name . " "  . $email);
 }

 
@mysql_close($conn);
 
/* Output header */
 
 echo json_encode($json);
 echo "fname" . $f_name;
 echo "lname" . $l_name;
 echo "email" . $email;
 ?>