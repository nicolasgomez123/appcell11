<?php
    $server = 'localhost';
    $username= 'root';
    $password= '';
    $database= 'appcell';


    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;" ,$username, $password);
    } catch (PDOException $error) {
        die('connection failed: '.$error->getMessage());
    }
?>

