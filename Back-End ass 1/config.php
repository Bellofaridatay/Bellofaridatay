<?php


function conn(){

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "test";
    
    $dbc = new mysqli($servername, $username, $password, $dbname);

if ($dbc->connect_error) {
    die("Database Connection failed: " . $dbc->connect_error);
    exit();
    }  
    
    return $dbc;

}

?>