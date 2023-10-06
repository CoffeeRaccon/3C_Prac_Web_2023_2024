<?php
    function zad3a($number)
    {
       if($number >= 100 && $number < 150)
            echo "liczba mieści się w przedziale <br>";
        else
            echo "liczba nie mieści się w przedziale <br>";
    }
    function zad3b($number)
    {
        $check = ($number >= 100 && $number < 150);
        switch($check)
        {
            case 0:
                echo "niemieści się w przedziale <br>";
                break;
            case 1: 
                echo "mieści się w przedziale <br>";
                break;
        }
    }
    zad3a(100);
    zad3b(100);
    zad3a(150);
    zad3b(150);
?>