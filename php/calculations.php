<?php 
    function calc($ax, $ay, $bx, $by, $cx, $cy) {
        $mx = ($bx + $cx) / 2;
        $my = ($by + $cy) / 2;

        $x = ($mx - $ax);
        $y = ($my - $ay);

        return sqrt($x * $x + $y * $y);
    }
?>