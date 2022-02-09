<?php
$A=rand(1, 8);
$B=rand(2, 7);
echo "Avant de permuter les nombres sont $A et $B"."<br>";

$r=$A;
$A=$B;
$B=$r;
echo "apres permutation les nombre sont$A et $B";
