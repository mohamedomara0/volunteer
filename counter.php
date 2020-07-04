
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include 'connect.php';

//$do = isset($_GET["do"]) ? $_GET["do"] : "manage";

if( isset($_GET["id"])){
    
            $id=$_GET["id"];

            $stmt = $con->prepare("select counter from detail where id = ?" );
            
            $stmt->execute(array($id));
            //$stmt->execute();
            $rows = $stmt->fetchAll();
             foreach ($rows as $row) {
            //echo ''.$row['counter'];
            $stmt = $con->prepare("update detail set counter=? where id ='".$id."'");
            
            $new = $row['counter']+1;
            $stmt->execute(array($new));
            
            
          // $un= $_SESSION['username'];
           
            $stmt1=$con->prepare("INSERT INTO sheck (ids, un )
            VALUES (?,?)");
            $stmt1->execute(array($id,$_SESSION['username']));
            
            
            
            
            $count = $stmt->rowcount();
            
            if($count>0){
                header("location: volunteer.php");
                
            }
                
             }
    
    
}