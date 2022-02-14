<?php
          function nombrepremiere($n){
                $nbDiv = 0;   
                for($i=1;$i<=$n;$i++){
                    if($n%$i==0){
                        $nbDiv++;            
                    }
                }
                    return $nbDiv == 2;         
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
    function superieur(array $tabpr):array{
        $tabsup=[];
        $moy=$som/count($tabpr);
        foreach ($tabpr as $val) {
            if ($tabpr[$val]>=$moy) {
                $tabsup[]=$tabpr[$val];
            }
        } 
         return $tabsup;     
    }
    
    function inferieur(array $tabpr):array{
        $tabinf=[];
        $moy=$som/count($tabpr);
        foreach ($tabpr as $val) {
            if ($tabpr[$val]<$moy) {
                $tabinf[]=$tabpr[$val];
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
               if ($n<=10) {
            $erre[$k]="veillez donner un nombre superieur a 10000";
               }
           }
       }
    }
/*
function nmbrpremier($n){
    $som=0;
    $tab=[];
 
    for($i=2; $i<=$n; $i++){
        $compt=0;
        for ($j=1; $j <=$i ; $j++) { 
            $div=$i%$j;
            if($div==0){
                $compt+=1;  //nombre de diviseur
                
            }
            
        }
      
        if($compt==2){
            $tab[$j]=$i;
        }
    }

            return $tab;
}
*/

        ?>