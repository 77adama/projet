<?php

    session_start();
    if(isset($_SESSION['err'])){
        $err=$_SESSION['err'];
    }
?>
<form action="controller.php" method="POST">
<label for="N"> saisir N :</label><br>
<input type="text" name="N" /> 
<?php
        if(!empty($err['N'])) echo $err['N'] ; else echo '';
    ?> <br>
    
<input type="submit" name="valider" value="valider"/>

<button class="button"> <a href="../Exercice12/index.php">SUIVANT</a> </button>
<button class="button"> <a href="../Exercice10/index.php">PRECEDANT</a> </button>

</form>
    <?php
    

if(isset($err)){
    unset($_SESSION['err']);
    exit();
}

?>
<?php
