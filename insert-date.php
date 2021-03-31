<?php

include('db.php'); 

$date = date('Y-m-d');

$sql = "SELECT * FROM fem WHERE datum = ' " . $date . "' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >= 1) {

    $rader = mysqli_num_rows($result);

    echo $rader;

} else {

    $inser = "INSERT INTO fem SET datum = ' " . $date . "' ";

    $insertres = mysqli_query($conn, $inser);

    if($insertres) {

        echo "framgång";

    } else {

        echo "prublm";
    
    }

}

mysqli_close($conn);

?>
