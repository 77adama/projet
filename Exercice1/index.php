<?php
require "function.php";

$x=rand(1, 10);

echo "le cote est ".$x. "<br>";

$peri=perimetre($x);


echo "le perimetre est $peri". "<br>"; 
$surf=surface($x);
echo "la surface est $surf" . "<br>";
$diago=diagonal($x);
echo "la diagonal est $diago";
?> <br>
<body>
<button class="button"> <a href="../Exercice2/index.php">SUIVANT</a> </button>
</body>