<?php
    $A = 10;
    $B = 15;
    $C = 20;

    if($A>$B && $A>$C){
        echo $A . "Is largest.";
    }elseif ($B>$A && $B>$C) {
        echo $B . "Is largest.";
    }elseif ($C>$A && $C>$B) {
        echo $C . "Is largest.";
    }
?>