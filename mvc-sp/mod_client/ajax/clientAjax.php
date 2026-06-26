<?php


try{
    define("USER","root");
    define("PASS","");
    define("HOST","localhost");
    define("BASE","client");

    $cnx = new PDO("mysql:host=".HOST."; dbname=".BASE, USER, PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $sql = "SELECT * FROM client WHERE id = ?";


}catch (PDOException $e){
    echo $e->getMessage();
}
