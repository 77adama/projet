<?php
function calculDistance( float $xa,float $xb,float $ya,float $yb):float{
    $dist=sqrt(pow(($xa-$xb),2)+pow(($ya+$yb),2));
    return $dist;
}