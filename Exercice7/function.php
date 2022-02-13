<?php
        /**
  * fonction qui teste si le nombre saisie est numerique
  */
  function estNum($n):bool{
    return is_numeric($n);
    
}
/**
 * fonction qui teste si le champ est vide
 */
  
  function estVide($n):bool{
      return empty($n);
  }
  /**
   * fonction qui teste  la validite d'un nombre
   */
      
  function valideNombre( $n,string $k,array &$erre):void{
      if(estVide($n)){
          
          $erre[$k]="veuiller saisir une valeur";
      }else{
          if(!estNum($n)){
          $erre[$k]="veuillez saisir un nombre" ;
          }
          }
      }
  
  
  function nbrJour( $_m,$_a ){
   
        if ($_m==4|$_m==6|$_m==9|$_m==11) {
            $nj=30;
        } else {
            if ($_m==2) {
                        if ($_a%4==0) {
                            $nj=29;
                        } else {
                           $nj=28;
                        }
                        
            } else {
                $nj=31;
            }
            
        }
        return $nj;
  }
        /**
     *fonction qui donne la date suivante
     */
    /*
    function dateSuivante($j,$m ,$a){
        
            $js=$j+1; $ms=$m; $as=$a;
            if ($j==nmbrJour($m,$a)) {
                $js=1; $ms=$m+1; $as=$a;
            } else {
                if ($m==12) {
                    $js=1; $ms=1; $as=$a+1;
                }
                
                
            }
            return $ds;
      } 
 
/*
function estVide($n):bool{
    return empty($n);    
}

function estNum($n):bool{
    return is_Numeric($n);
}

function validNombre($n, string $k, array &$erre ):void{
    if (estVide($n)) {
        $erre[$k]="veullez saisir une valeur";
    } else {
        if(!estNum($n)){
            $erre[$k]="veiller saisir un nombre";
        }
    }
    
}

function laDate (int $j, int $m, int $a) {

} */
?>
  
