<?php
function connect_to_db(){

    $server = "localhost";
    $database = "echritounsi";
    $username = "root";
    $password = "";
    $dns = "mysql:host=$server;dbname=$database";

    try {
        
        $connect = new PDO($dns,$username,$password);
        return $connect;

    } catch (PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }

}
?>