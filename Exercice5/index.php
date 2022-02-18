<?php
require "function.php";
$xa=rand();
$xb=rand();
$ya=rand();
$yb=rand();
 $d = calculDistance($xa, $xb, $ya, $yb);
echo "la distance est: ".$d;
?><br>
<body>
<button class="button"> <a href="../Exercice6/index.php">SUIVANT</a> </button>
<button class="button"> <a href="../Exercice4/index.php">PRECEDANT</a> </button>
</body>
