<?php
$host = "babc4a87d234";
$db_name = "instore";
$username = "root";
$password = "mutisya";
 
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
catch(PDOException $exception){
    //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>