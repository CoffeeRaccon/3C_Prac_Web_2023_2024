<?php
    $pl = 10.10;
    $choice = "EUR";

    switch ($choice) {
        case "EUR":
            echo ($pl * 4.32);
            break;
        case "USD":
            echo ($pl * 3.21);
            break;
        case "FR":
            echo ($pl * 3.98);
    }
>