
<?php
session_start();
if(isset($_SESSION['err'])){
    $err=$_SESSION['err'];
}
?>

<form action="controller.php" method="POST">
<label for="a">saisir a :</label> <br>
<input type="text" name="a"/> 
<?php
        if(!empty($err['a'])) echo $err['a'] ; else echo '';
?> <br>
<input type="submit" value="valider" name="valider"/>
</form>
    <?php
        if(isset($err)){
        unset($_SESSION['err']);
        exit();
        }
    ?>