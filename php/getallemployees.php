<?php

 
    include_once('config.php');

    //fetch table rows from mysql db
    $sql = "select * from Employee;";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
    
    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($conn);
?>
