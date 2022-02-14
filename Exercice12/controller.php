<?php
    include('function.php');
    if (isset($_POST['valider'])) {
        $choix=$_POST['choix'];

        if (strcmp($_POST['choix'], 'fr')) {
            echo affichTableau($tabang);
           
        }else{
            echo affichTableau($tabfr);    
        }
    }
    
       
    
?>