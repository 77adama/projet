<?php

    session_start();
    if(isset($_SESSION['err'])){
        $err=$_SESSION['err'];
    }
?>
   <?php
   echo "saisir les valeurs de a, b et c de l’équation : aX²+bX+c=0"
   ?>
  
<form action="controller.php" method="POST">
<label for="a"> saisir a :</label><br>
<input type="text" name="a" /> 
<span style="color:red;"></span> 
<?php
        if(!empty($err['a'])) echo $err['a'] ; else echo '';
    ?> <br>
<label for="b"> saisir b :</label> <br>
<input type="text" name="b" /> 
<span style="color:blue;"></span> 
    <?php
        if(!empty($err['b'])) echo $err['b'] ; else echo '';
    ?>
    <br>
    <label for="c"> saisir c :</label> <br>
    <input sytyle="text" name="c"/>
    <span style="color:blue;"></span> 

    <?php
        if(!empty($err['c'])) echo $err['c'] ; else echo '';
    ?>
     <br>
<input type="submit" name="valider" value="valider"/>
</form>
<?php

if(isset($err)){
    unset($_SESSION['err']);
    exit();
}

?>