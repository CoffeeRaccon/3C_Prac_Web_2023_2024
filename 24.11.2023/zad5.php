<?php
    function pierwiastek ($x, $przyb) {
        $a = 0.0;
        $b = x;
        $c;
        
        while (fabs($b-$a) > $przyb) {
            $c = ($a + $b)/2;
            if($c * $c > $x)
                $b = $c;
            else 
                $a = $c;
        }
    
        return $c;
    }
    $x = 2;
    $przyb = 0.001;
    echo ("pierwiastek z " . $x . "=" . pierwiastek($x, $przyb));
?>