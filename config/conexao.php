<?php

    $host="mysql:host=localhost;dbname=mosaico_project;charset=utf8mb4;port=3306";
    $user="root";
    $pass="";

    try{
        $db = new PDO ($host, $user, $pass);
    } catch(PDOException $e){
        print "Erro: ".$e->getMessage()."</br>";
        die();
    }

?>