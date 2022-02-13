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
   * fontion qui teste si le nombre est positive
   */
  function estPositif($n):bool{
      return is_positif($n);
  }
  /**
   * fonction qui teste  la validite d'un nombre
   */
  function valideNombre( $n,string $k,array &$erre):void{
      if(estVide($n)&$n!=0){
          
          $erre[$k]="veuiller saisir une valeur";
      }else{
          if(!estNum($n)){
          $erre[$k]="veuillez saisir un nombre" ;
          }else{
            if ($n<=0) {
                $erre[$k]= "veuiller saisir un nombre positif";
            }
          }
      }
    }
    /**
     *fonction qui donne le resultat 
     */
    function solution(int $N,){
            for($i=1; $i<=10; $i++){  
                echo $N."x".$i."=".$N*$i."\n" ."<br>"; 
            }
        
        
    }