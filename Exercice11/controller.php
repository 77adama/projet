<ul>
<?php
session_start();
include_once("function.php");
if(isset($_POST['valider'])){
    $N = $_POST['N'];
    $err=[];
    valideNombre($N,"N",$err);
    
    $T1=affichTableau(tableauPremier($N));
    $T3=affichTableau(superieur(tableauPremier($N)));
    $T2=affichTableau(inferieur(tableauPremier($N)));


    if(count($err)==0){
       var_dump($T1);
       var_dump($T2);
       var_dump($T3);
        
    }else{
       $_SESSION['err']=$err;
       header('location:index.php');
    }
}