<?php
    function Zad6a($year)
    {
        if($year >=1582 
            && $year % 4 == 0
            && $year % 100 != 0
            || $year % 400 == 0)
            echo "29 dni <br>";
        else
            echo "28 dni <br>";
    }
    function zad6b($year)
    {
        $check = ($year >=1582 
        &&($year % 4) == 0
        && ($year % 100) != 0
        || ($year % 400) == 0);

        switch($check)
        {
            case 0:
                echo "28 dni <br>";
                break;
            case 1:
                echo "29 dni <br>";
                break;
        }
    }
    zad6a(1600);
    zad6b(1600);
    zad6a(1900);
    zad6b(1900);
?>