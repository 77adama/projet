<?php
session_start();
include_once("function.php");
if (isset($_POST['valider'])) {
    $a=$_POST['a'];
    $err=[];
    valideNombre($a, 'a', $err);
    
    if (count($err)==0) {
        echo "bon";
    echo affichTableau(tableauPremier($N));
    echo affichTableau(inferieur(tableauPremier($N)));
       
        
    }else{
        $_SESSION['err']=$err;
        header('location:index.php');
    }
}