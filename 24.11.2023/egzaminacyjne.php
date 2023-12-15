<?php
    $i = 10;
    $suma = 0;
    do
    {
        $suma += $i;
        $i++;
    }while($suma <= 100)
    echo ("liczba zsumowanych liczb:" . $i - 10 . "Suma:" . $suma);
?>