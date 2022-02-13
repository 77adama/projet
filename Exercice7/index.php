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
    <label for="j"> saisir jour :</label><br>
    <input type="text" name="j" /> 
     
    <?php
            if(!empty($err['j'])) echo $err['j'] ; else echo '';
        ?> <br>
    <label for="m"> saisir moi :</label> <br>
    <input type="text" name="m" /> 
    
        <?php
            if(!empty($err['m'])) echo $err['m'] ; else echo '';
        ?>
        <br>
        <label for="a"> saisir annee :</label> <br>
        <input sytyle="text" name="a"/>
        
    
        <?php
            if(!empty($err['a'])) echo $err['a'] ; else echo '';
        ?>
         <br>
    <input class="sub" type="submit" name="valider" value="valider"/>
    </form>
    </div>
    </body> 
    <?php
    
    if(isset($err)){
        unset($_SESSION['err']);
        exit();
    }
     

       /* session_start();
        if(isset($_SESSION['err'])){
            $err=$_SESSION['err'];
        }
    
?>

<form action="controller.php" method="POST">
    <label for="j"> saisir jour :</label> <br>
    <input type="text" name="j"/> 
    <span style="color:red;"></span>

    <?php
        if(!empty($err['j']))
         echo $err['j'] ;
          else echo ''; 
    ?> <br>
    <label for="m"> saisir moi :</label> <br>
<input type="text" name="m" /> 
<span style="color:red;"></span> <br>
    <?php
        if(!empty($err['m'])) echo $err['m'] ; else echo '';
    ?> 
    <label for="a"> saisir annee : <label> <br>
    <input type="test" name="m"/>
    <span style="color:red;"> </span>
    <?php
    if (!empty($err["a"])) 
        echo $err['a'];
        else 
        echo '';
    ?> <br>

<input type="submit" name="valider" value="valider"/>

</form>
<?php

if(isset($err)){
    unset($_SESSION['err ']);
    exit();
}*/

?>