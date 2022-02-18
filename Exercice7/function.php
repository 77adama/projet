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
      function dateInvalide($j, $m, $a){
        if ($j<1|$j>31|$m<1|$m>12|($j>30&($m==4|$m==6|$m==9|$m==11))|($j>29&($a%4==0))|($j>28&$a%4!=0)) {
            return true;
        }
      }

function dateSuivante($_j, $_m, $_a){ 
    $njj=nbrJour($_m,$_a); 
                  $js=$_j+1; $ms=$_m; $as=$_a;
                  if ($_j==$njj) {
                    $js=1;
                    $ms=$_m+1;
                    $as=$_a;
                            if ($_m==12) {
                              $js=1; $ms=1; $as=$_a+1;
                            }
                  }
                  echo "la date suivante est :".$js."/".$ms."/".$as;
}  
    function datePrecedante($_j, $_m, $_a){
        if ($_j==1) {
           if ($_m==1) {
               $jp=31; $mp=12; $ap=$_a-1;
           } else {
              if ($_m==3) {
                  if ($_a%4==0) {
                    $jp=29; $mp=2; $ap=$_a;
                  } else {
                    $jp=28; $mp=2; $ap=$_a;
                  }
                  
              } else {
                if ($_m==5|$_m==7|$_m==10|$_m==12) {
                    $jp=30; $mp=$_m-1; $ap=$_a;
                } else {
                    $jp=31; $mp=$_m-1; $ap=$_a;
                }
                
              }
              
           }
           
        }else{
            $jp=$_j-1; $mp=$_m; $ap=$_a;
        }
        echo "la precedante est :".$jp."/".$mp."/".$ap;
    }
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
  
