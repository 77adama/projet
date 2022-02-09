<?php
        session_start();
        include_once("function.php");
        if(isset($_POST['valider'])){
            $_j = $_POST['j'];
            $_m = $_POST['m'];
            $_a = $_POST['a'];
            $err=[];
            valideNombre($_j,"j",$err);
            valideNombre($_m,"m",$err);
            valideNombre($_a,"a",$err);
            if(count($err)==0){ 
                $njj=nbrJour($_m,$_a);
              if ($_j==$njj){
                  $js=1;
                  $ms=$_m+1;
                  $as=$_a;
                  
              
                  if ($_m==12) {
                      $js=1; $ms=1; $as=$_a+1;
                  }
            else{
                    $js=$_j+1; $ms=$_m; $as=$_a;
                  }
                  
                  
              }
              echo "la date suivante est:".$js."/".$ms."/".$as;

            }
            
            else{
               $_SESSION['err']=$err;
               header('location:index.php');
            }
        }

/*
include_once("function.php");
    if(isset ($_POST["valider"])){
      $_j = $_POST['j'];
      $_m = $_POST['m'];
      $_a = $_POST['a'];
        $err=[];
            validNombre($_j,"j",$err);
            validNombre($_m,"m",$err);
            validNombre($_a,"a",$err);
        if (count($err==0)) {
            echo date($_j,$_m,$_a);
        }else{
            
                $_SESSION['err']=$err;
                header('location:index.php');
           } 
        }*/

    