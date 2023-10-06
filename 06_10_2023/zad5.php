<?php
    function zad5a($age)
    {
        if($age < 11)
            echo "dziecko <br>";
        else if($age >= 18)
            echo "dorosły <br>";
        else
            echo "nastolatek <br>";
    }
    function zad5b($age)
    {
        $check = 0;
        $check += ($age >=11) + ($age >= 18);
        switch($check)
        {
            case 0:
                echo "dziecko <br>";
                break;
            case 1:
                echo "nastolatek <br>";
                break;
            case 2: 
                echo "dorosły <br>";
                break;
        }
    }
    zad5a(0);
    zad5b(0);
    zad5a(11);
    zad5b(11);
    zad5a(18);
    zad5b(18);
?>