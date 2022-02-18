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
              if ($_j<1|$_j>31|$_m<1|$_m>12|($_j>30&($_m==4|$_m==6|$_m==9|$_m==11))|($_j>29&($_a%4==0))|($_j>28&$_a%4!=0)) {
               echo "veuillez saisir une date valide";
              } else {
                echo dateSuivante($_j, $_m, $_a) ."<br>";
                echo datePrecedante($_j, $_m, $_a);
              }
              
             
             /* 
              $njj=nbrJour($_m,$_a); 
                  $js=$_j+1; $ms=$_m; $as=$_a;
                  if ($_j==$njj) {
                    $js=1;
                    $ms=$_m+1;
                    $as=$_a;
                            if ($_m==12) {
                              $js=1; $ms=1; $as=$_a+1;
                            }
                  }
                  echo "la date suivante est :".$js."/".$ms."/".$as;
                */    }
              
               
              





            
/*
                   if ($_j==$njj){
                  $js=1;
                  $ms=$_m+1;
                  $as=$_a;
                  echo $js."/".$ms."/".$as;
                   }else{ 
                          if ($_m==12) {
                               $js=1; $ms=1; $as=$_a+1;
                  echo $js."/".$ms."/".$as;

                }
                   else{
                    
                    $js=$_j+1; $ms=$_m; $as=$_a;
                  echo $js."/".$ms."/".$as;

                  }
                  
                 
              }
            
            }
            */
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

    