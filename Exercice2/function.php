<?php
function calculPerimetre($L, $l){
    return 2*$L*$l;
}
function calculSurface($L, $l){
    return $L*$l;
}
function calculDiagonal($L, $l){
    return sqrt(pow($L,2)+pow($l,2));
}