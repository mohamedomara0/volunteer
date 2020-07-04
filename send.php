<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connect.php';
            session_start();
            $to=$_POST["email"];
            $desc=$_POST["desc"];
            
          

            $stmt=$con->prepare("INSERT INTO messages (from1, disc, to1 )
            VALUES (?,?,?)");
           $stmt->execute(array($_SESSION['username'],$desc,$to));
            $count = $stmt->rowcount();
            
            if($count > 0){
            $stmt1=$con->prepare("select * from register where email= ? and priority = 2 ");
            $stmt1->execute(array($_SESSION['username']));
            $count1 = $stmt1->rowcount();
                if($count1>0){
               header("location: volunteer.php");
               exit();
                } else {
                     header("location: messages.php");
                        exit();
                }
                
            }
            
            
            ?>