<?php
require "function.php";
$xa=rand();
$xb=rand();
$ya=rand();
$yb=rand();
 $d = calculDistance($xa, $xb, $ya, $yb);
echo "la distance est: ".$d;
