<?php
 
    //Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbrfid";
 
    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");
 
    // Prepare the SQL statement
    
    $result = mysqli_query ($conn,"INSERT INTO loker2 (`chip`) VALUES ('".$_GET["chip"]."')"); 
      


    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($conn));
        }  
?>