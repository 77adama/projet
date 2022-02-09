<?php
session_start();
include_once("function.php");
if(isset($_POST['valider'])){
    $_a = $_POST['a'];
    $_b = $_POST['b'];
    $_c = $_POST['c'];
    $err=[];
    valideNombre($_a,"a",$err);
    valideNombre($_b,"b",$err);
    valideNombre($_c,"c",$err);


    if(count($err)==0){
      echo  solution($_a,$_b,$_c);
    }else{
       $_SESSION['err']=$err;
       header('location:index.php');
    }
}