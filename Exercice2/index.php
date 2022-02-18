<?php
require "function.php";
$val =rand(1, 5);
$val1 =rand(1, 5);
$peri=calculPerimetre($val, $val1);
echo "le perimetre est: $peri"."<br>";
$surf=calculSurface($val, $val1);
echo "lasurface est : $surf" ."<br>";
$diago=calculDiagonal($val, $val1)."<br>";
echo "le diagonal est: $diago";
?>
<br>
<body>
<button class="button"> <a href="../Exercice3/index.php">SUIVANT</a> </button>
<button class="button"> <a href="../Exercice1/index.php">PRECEDANT</a> </button>
</body>
