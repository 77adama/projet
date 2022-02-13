<?php
    $tabfr=[
        1=>"janvier",
        2=>"fevrier",
        3=>"mars",
        4=>"avril",
        5=>"mai",
        6=>"juin",
        7=>"julliet",
        8=>"aout",
        9=>"septembre",
        10=>"octobre",
        11=>"novembre",
        12=>"decembre",
    
    ];
    $tabang=[
        1=>" January",
        2=>"February",
        3=>"March",
        4=>" April",
        5=>"May",
        6=>"June",
        7=>"July",
        8=>"August",
        9=>"September",
        10=>"October",
        11=>"November",
        12=>"December",
    ];
    function affichTableau(array $array):void{
        echo '<table border="2">';
        for ($i=1; $i <=count($array) ; $i++) { 
            if ($i%4==1) {
                echo '<tr>';
            }
            echo '<td>'.$array[$i] .'</td>';
            if ($i%4==0) {
                echo '</tr>';
            }
        }
        echo '</table>';
    }
?>