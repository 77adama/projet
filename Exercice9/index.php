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
    <label for="N" > saisir N : </label> <br>
    <input type="text" name=N> 
    <span style="color:red"> </span>
    <?php
            if(!empty($err['N'])) echo $err['N'] ; 
        ?> <br>
    <input class="sub" type="submit" name="valider" valu="valider">
</form>
</div>
</body>
    <?php
   

if(isset($err)){
    unset($_SESSION['err']);
    exit();
}

?>