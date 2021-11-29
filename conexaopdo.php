<?php

$server = "localhost";
$user = "eduardo";
$pass = "123456";
$bd = "bdcurso";

try {
    $con = new PDO("mysql:host=$server;dbname=$bd",$user,$pass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao BD";
}catch(PDOException $e){
echo "Deu ruim: ".$e->getMessage();
}