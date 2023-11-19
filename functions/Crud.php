<?php
function createAddress($data)
{
    global $conn;
    
    $query="INSERT INTO address VALUES(NULL,?,?,?,?,?)";
    
    if($stmt=mysqli_prepare($conn,$query))
    {
       mysqli_stmt_bind_param($stmt,"sisss",$data["street"],$data["street_nb"],$data["type"],$data["city"],$data["zipcode"]);
        $william=mysqli_stmt_execute($stmt);
        return "bien";
    }
    else{
        return"mal";

    }
    
}
