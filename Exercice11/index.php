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
</form>
    <?php
    

if(isset($err)){
    unset($_SESSION['err']);
    exit();
}

?>
<?php
