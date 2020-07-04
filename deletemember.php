<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connect.php';

            $id=$_GET["id"];

            echo ''.$id;
            $stmt = $con->prepare("delete from register where id=?");
            $stmt->execute(array($id));
            $count = $stmt->rowcount();      
            if($count > 0){
               header("location: allmembers.php");
               exit();
                
            }