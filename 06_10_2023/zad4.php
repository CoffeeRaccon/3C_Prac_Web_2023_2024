<?php
    function zad4a($number)
    {
       if($number < 0)
            echo "liczba jest mniejsza od zera <br>";
        else if($number == 0)
            echo "liczba jest równa zero <br>";
        else
            echo "liczba jest większa od zera <br>";
    }
    function zad4b($number)
    {
        $check = 0;
        $check += ($number >= 0) + ($number > 0);

        switch($check)
        {
            case 0:
                echo "liczba jest mniejsza od zera <br>";
                break;
            case 1:
                echo "liczba jest równa zero <br>";
                break;
            case 2: 
                echo "liczba jest większa od zera <br>";
                break;
        }
    }
    zad4a(-1);
    zad4b(-1);
    zad4a(1);
    zad4b(1);
    zad4a(0);
    zad4b(0);
?>