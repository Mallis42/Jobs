<?php

 
    
     $conn = mysqli_connect("localhost","usnacifi_user1","Carelpre24150762","usnacifi_Jobs") or die("Error " . mysqli_error($connection));
    //fetch table rows from mysql db
    $sql = "select * from `Jobs`;";
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