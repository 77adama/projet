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
    
    function estVide($n,):bool{
        
            
        
        return empty($n );
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
            }

                }
            
        
    }
    /**
     *fonction qui donne le resultat 
     */
    function solution(int|float $a,int|float $b,int|float $c,){
        if ($a==0) {
            if ($b==0) {
                if ($c==0) {
                   echo "on a une infinite de solution";
                } else {
                    echo "impossible";
                }
                
            } else {
                echo "la solution est".-1*$c/$b;
            }
            
        } else {
            $delta=pow($b,2)-4*$c*$a;
            if ($delta>0) {
            echo "solution1 est" .  (-1*$b+sqrt($delta))/2*$a."" ; 
            
            echo "solution2 est" . (-1*$b-sqrt($delta))/2*$a;
            } else {
                if ($delta==0) {
                    echo "La solution X0 est ".(-1*$b/2*$a);
                } else {
                    echo "on a pas une solution";
                }
                
            }
            
    
    
        }
        
    }
      /**   $d = $b*$b-4*$a*$c;
        if($d==0){
            echo "xo=".(-$b)/2*$a;
        }
        */
    
















/*function equationSecondDegre(float $a,float $b, float $c){
   
    if ($a==0) {
        if ($b==0) {
            if ($c==0) {
               echo "on a une infinite de solution";
            } else {
                echo "on a ps un solution";
            }
            
        } else {
            echo "la solution est".-1*$c/$b;
        }
        
    } else {
        $delta=pow($b,2)-4*$c*$a;
        if ($delta>0) {
        echo "solution1 est" .  $X1=(-1*$b+pow($delta, 2))/2*$a;
        echo "solution2 est" . $X2=(-1*$b-pow($delta, 2))/2*$a;
        } else {
            if ($delta==0) {
                echo "La solution est ".(-1*$b/2*$a);
            } else {
                echo "on a pas un solution";
            }
            
        }
        


    }
    
}*/
?>