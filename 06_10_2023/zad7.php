<?php
    function Zad7a($number1, $number2, $number3)
    {
        if($number1 > $number2 && $number1 > $number3)
            echo "$number1 <br>";
        else if($number2 > $number3)
            echo "$number2 <br>";
        else 
            echo "$number3 <br>";
    }
    function zad7b($number1, $number2, $number3)
    {
        switch($number1)
        {
            case $number1 > $number2 
                 && $number1 > $number3:
                 echo "$number1 <br>";
                 break;
            case $number2 > $number3:
                echo "$number2 <br>";
                break;
            default:
                echo "$number3 <br>";
                break;
        }
    }
    zad7a(3, 4, 5);
    zad7b(3, 4, 5);

    zad7a(4, 6, 3);
    zad7b(4, 6, 3);

    zad7a(7, 4, 3);
    zad7b(7, 4, 3);
?>