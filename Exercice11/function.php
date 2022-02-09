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
    

//******************************* */
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
//****************************************** */

        ?>