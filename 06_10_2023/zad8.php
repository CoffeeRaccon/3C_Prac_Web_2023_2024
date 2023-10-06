<?php
    function zad8a($number1, $number2, $number3)
    {
        if($number1 == $number2 
           || $number2 == $number3
           || $number1 == $number3)
           echo "przynajmniej 2 liczby są takie same <br>";
        else
            echo "wszystkie liczby są różne <br>";
    }
    function zad8b($number1, $number2, $number3)
    {
        switch($number1)
        {
            case $number1 == $number2:
            case $number1 == $number3:
            case $number2 == $number3:
                echo "przynajmniej 2 liczby są takie same <br>";
                break;
            default:
                echo "wszystkie liczby są różne <br>";
                break;
        }
    }
    zad8a(3, 4, 5);
    zad8b(3, 4, 5);

    zad8a(4, 5, 4);
    zad8b(4, 5, 4);

    zad8a(7, 7, 7);
    zad8b(7, 7, 7);
?>