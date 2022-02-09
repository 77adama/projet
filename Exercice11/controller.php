<?php
session_start();
        //include_once("function.php");
        if(isset($_POST['valider'])){
            $_N = $_POST['N'];
           
            $err=[];
            valideNombre($_N,"N",$err);
            
        
        if(count($err)==0){
                
          }else{
             $_SESSION['err']=$err;
             header('location:index.php');
          }
        }