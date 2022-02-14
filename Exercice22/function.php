<?php
function estVide($n){
    return empty($n);
}
function estNum($n){
    return is_numeric($n);
}
function valideNombre($n, string $k, array &$error ):void{
    if (estVide($n)) {
        $error[$k]="veuillez donner une valeur";
    }else{  if (!estNum($n)) {
        $error[$k]="veuillez donner un nombre";
    }else{
        if ($n<=10) {
            $error[$k]="veuillez donner un nombre superieur a 10000";
        }
    }
 }
}
function nombrepremiere($n){
    $nbDiv = 0;   
    for($i=1;$i<=$n;$i++){
        if($n%$i==0){
            $nbDiv++;            
        }
    }
        return $nbDiv = 2;         
}
function tableauPremier($n):array{
    $tabpr=[];
    for ($i=1; $i<=$n; $i++) { 
        if ($i==nombrepremiere($i)) {
           $tabpr[]=$i;
        }
    }
    return $tabpr;
}
function moyenne (array $tabpr):float{    
    $som=0;
  for ($i=1; $i<=count($tabpr) ; $i++) { 
      $som=$som+$tabpr[$i];    
  }
  return $som/count($tabpr);
}
function inferieur(array $tabpr):array{
    $tabinf=[];
    $moy=$som/count($tabpr);
    for ($i=1; $i <=count($tabpr) ; $i++) { 
        if (($i)<$moy) {
            $tabinf[]=$i;
        }
    }
         return $tabinf; 
 }
 function affichTableau(array $array):void{
    echo '<table border="2">';
    for ($i=1; $i <=count($array) ; $i++) { 
        
            echo '<tr>';
        
        echo '<td>'.$array[$i] .'</td>';
        
            echo '</tr>';
        
    }
    echo '</table>';
}