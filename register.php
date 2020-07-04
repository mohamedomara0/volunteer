<?php
        session_start();
              include 'connect.php';
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $user=$_POST["name"];
            $password=$_POST["password"];
            $confirmpassword=$_POST["repassword"];
            $email=$_POST["email"];
            $age=$_POST["age"];
            $nationality=$_POST["nationality"];
            $phonenumber=$_POST["phonenumber"];
            $location=$_POST["location"];
            $gender=$_POST["gender"];
            
            if($user ==""||$password==""||$password!=$confirmpassword||$gender==""){
                 header("location: register.html");
                
            }  else {
                
            $hash =  sha1($password);
            $stmt=$con->prepare("INSERT INTO register (username, password, email, type,age,phonenumber,location,nationality )
            VALUES (?,?,?,?,?,?,?,?)");
            $stmt->execute(array($user,$hash,$email,$gender,$age,$phonenumber,$location,$nationality));
          
            $count = $stmt->rowcount();
            
            if($count > 0){
               header("location: Login.html");
               exit();
                
            } 
        }
        }
         
        
        
        ?>