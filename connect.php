<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dsn="mysql:host=localhost;dbname=volunteer";
$user="root";
$pass="";
$option=array(   
PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"
);

try {
   
    $con=new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    echo $e;
    
}
?>