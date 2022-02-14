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
           }else{
               if ($n<=0) {
            $erre[$k]="veillez donner un nombre positif";
               }
           }
       }
    }