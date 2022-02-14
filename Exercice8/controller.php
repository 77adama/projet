<link rel="stylesheet" href="../Css/style.css">

<?php
session_start();
include_once("function.php");
if(isset($_POST['valider'])){
    $n = $_POST['n'];
    $err=[];
    valideNombre($n,"n",$err);
    


    if(count($err)==0){
        
        for ($i=1; $i <=$n ; $i++) { 
           ?>
           
           <ul>
                <li>
                    <?php
                        echo $i;
                    ?>
                </li>
            </ul>

          <?php
          }
         
         ?> 
      
    <?php
        
    }else{
       $_SESSION['err']=$err;
       header('location:index.php');
    }
}