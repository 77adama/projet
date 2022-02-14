<?php
function estVide($n,):bool{  
    return empty($n );
}
function estNum($n):bool{
    return is_numeric($n);   
}
function valideNombre( $n,string $k,array &$erre):void{
    if(estVide($n)){
        
        $erre[$k]="veuiller saisir une valeur";
    }else{
        if(!estNum($n)){
        $erre[$k]="veuillez saisir un nombre" ;
        }else{
            for ($i=0; $i <9; $i++) { 
               
            }

            
        }
    }
 }
?>