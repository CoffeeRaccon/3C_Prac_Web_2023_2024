<?php
    function zad2a($number1, $number2)
    {
        if(($mod = $number1 % $number2) == 0)
            echo "podzielna bez reszty <br>";
        else
            echo "niepodzielna bez reszty <br>";
    }
    function zad2b($number1, $number2)
    {
        $mod = $number1 % $number2;
        switch($mod)
        {
            case 0:
                echo "podzielna bez reszty <br>";
                break;
            default:
                echo "niepodzielna bez reszty <br>";
                break;
        }
    }
    zad2a(3, 2);
    zad2b(3, 2);
    zad2a(4, 2);
    zad2b(4, 2);
?>