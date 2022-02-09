<?php

    session_start();
    if(isset($_SESSION['err'])){
        $err=$_SESSION['err'];
    }
?>
<form action="controller.php" method="POST">
<label for="n"> saisir n :</label><br>
<input type="text" name="n" /> 
<?php
        if(!empty($err['n'])) echo $err['n'] ; else echo '';
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
