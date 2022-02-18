<?php
    session_start();
    if(isset($_SESSION['err'])){
        $err=$_SESSION['err'];
    }
?>
<link rel="stylesheet" href="../Css/style.css">
<body>
    <div class="container">
   <form action="controller.php" method="POST">
<label for="n"> saisir n :</label><br>
<input type="text" name="n" />  
    <?php
        if(!empty($err['n'])) echo $err['n'] ; else echo '';
    ?> <br>
    <input class="sub" type="submit" name="valider" value="valider"/>
   
<button class="button"> <a href="../Exercice11/index.php">SUIVANT</a> </button>
<button class="button"> <a href="../Exercice9/index.php">PRECEDANT</a> </button>

</form>
    </div>
</body>
<?php
if(isset($err)){
    unset($_SESSION['err']);
    exit();
}
?>