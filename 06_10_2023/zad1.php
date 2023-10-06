<?php
    function Zad1a($number)
    {
        if(($number % 2) == 0)
            echo "liczba jest parzysta <br>";
        else
            echo "liczba jest nieparzysta <br>";
    }
    function zad1b($number)
    {
        $mod = $number % 2;
        switch($mod)
        {
            case 0:
                echo "liczba jest parzysta <br>";
                break;
            case 1:
                echo "liczba jest nieparzysta <br>";
                break;
        }
    }
    zad1a(3);
    zad1b(3);
    zad1a(4);
    zad1b(4);
?>