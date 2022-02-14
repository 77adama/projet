<?php
 function nombrepremiere($n){
    $nbDiv = 0;   
    for($i=1;$i<=$n;$i++){
        if($n%$i==0){
            $nbDiv++;            
        }
    }
    if($nbDiv == 2){
        return true;
    }      
}
function tableauPremier(array $array):void{
    for ($i=0; $i <=count($array) ; $i++) { 
        if ($i==nombrepremiere) {
            echo $array[$i];
        }
    }
}

/** 
          function nombrepremiere($n){
              $n=23;
                $nbDiv = 0;   
                for($i=1;$i<=$n;$i++){
                    if($n%$i==0){
                        $nbDiv++;            
                    }
                }
                if($nbDiv == 2){
                    return $true; 
                } 
                  
            }
    
    */

// Fonction N°1 *****************************
/*function nbPremier($n){
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

}*/

/** 
//  Fonction N°2 *****************************
function moyenne ($n){
    $tab=[];
    $som=0;
  for ($i=0; $i<$n ; $i++) { 
      $tab[$i]=$i;
      
  }
  for ($i=1; $i<=$n ; $i++) { 
    $som+=$tab[$i];
}
  //calcul de la moyenne
  $moy=$som/$n;
 return $moy;
}
*/
//  Fonction N°3 *****************************
/*
function superieur($n){
    $tab=[];
    $j=0;
    $ada=moyenne($tab,$n);
      for ($i=0; $i <$n ; $i++) { 
        if ($i>$ada) {
            $tab[$j]=$i;
            $j++;  
        }
        
      } 
        return $tab;   
}*/
//  Fonction N°4 *****************************
/*
function inferieur($n){
    $tab=[];
    $j=0;
    $ada=moyenne($tab,$n);
      for ($i=0; $i <$n ; $i++) { 
        if ($i<$ada) {
            $tab[$j]=$i;
            $j++;  
        }
        
      } 
        return $tab;   
}

*/

//******************************************************** */
//Test





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">

    <label for="">Donner un entier</label><br>
    <input type="text" name="n"><br>
    <input type="submit">
    </form>
    
</body>
</html>
