<?php
        session_start();
     //   $pagetitle="login";
              include 'connect.php';
              
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $name=$_POST["workname"];
            $location=$_POST["location"];
            $kind=$_POST["kind"];
            $number=$_POST["number"];
            $skils=$_POST["skils"];
            $requerment=$_POST["requerment"];
            $linklocation=$_POST["linklocation"];
            
            
            $stmt=$con->prepare("INSERT INTO detail (name, location, kind, number , skils ,username,requerment,linklocation )
            VALUES (?,?,?,?,?,?,?,?)");
            $stmt->execute(array($name,$location,$kind,$number,$skils,$_SESSION['username'],$requerment,$linklocation));
           
            $count = $stmt->rowcount();
            
            if($count > 0){
                
               header("location: home.php");
               exit();
                
            } 
        }
        
        
        
        ?>