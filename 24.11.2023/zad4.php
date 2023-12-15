<?php
    for($i = 1; $i <= 10; $i++)
    {
        echo $i;
        echo "</br>";
        echo sqrt($i);
        echo "</br>";
    }

    $i = 1;
    while($i <= 10)
    {
        echo $i;
        echo "</br>";
        echo sqrt($i);
        echo "</br>";
        $i++;
    }

    $i = 1;
    do
    {
        echo $i;
        echo "</br>";
        echo sqrt($i);
        echo "</br>";
        $i++;
    }while($i <= 10)
?>