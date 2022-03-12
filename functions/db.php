<?php

$connection = mysqli_connect('localhost','root','','dental');

function row_Count($result){
    
    return mysqli_num_rows($result);
    
}

function fetch_array($result){
    
    global $connection;
    return mysqli_fetch_array($result);
    
}

function confirm($result){
    
    global $connection;
    
    if(!$result){
        
        die("QUERY FAILED" . mysqli_error($con));
        
    }
    
}

function query($query){
    
    global $connection;
    return mysqli_query($connection, $query);
        
}

function escape($string){
    
    global $connection;
    return mysqli_real_escape_string($connection,$string);
    
}



?>