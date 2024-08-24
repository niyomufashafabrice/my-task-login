<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// define("HOSTNAME", "localhost");
// define("USERNAME", "root");
// define( "root");
// define( "crud_operation");

$connection = mysqli_connect("localhost","root","","crud_operation");

if(!$connection ){
    die("connection Failed");
}

?>