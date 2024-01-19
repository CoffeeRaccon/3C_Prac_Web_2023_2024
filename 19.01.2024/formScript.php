<?php
    if(!isset($_POST['prof'])
       ||$_POST['name'] == ""
       ||$_POST['surname'] == ""
       ||$_POST['theNameOfTheSisterOfTheUnclesMotherFromHisFathersSide'] == ""
       ||$_POST['phoneNumber'] == "")
       {
            echo "Prosze o wypełnienie całego formularza przed kontynuacją";
            exit();
       }
       
    echo "Wprowadzone dane:</br>";
    echo "Imię: " . trim($_POST['name']) . "</br>";
    echo "Nazwisko: " . trim($_POST['surname']) . "</br>";
    echo "Imię siostry matki stryja od strony ojca: " . trim($_POST['theNameOfTheSisterOfTheUnclesMotherFromHisFathersSide']) . "</br></br>";
  
    echo "Numer Telefonu: " . trim($_POST['phoneNumber']) . "</br>";
    echo "Profil: " . trim($_POST['prof']) . "</br></br>";
    
    if(!empty($_POST['languages']))
    {
        echo "Języki: </br>";
        echo "<ul>";
        foreach ($_POST['languages'] as $language)
            echo "<li>$language</li>";
        echo "</ul>";
    }


    echo "<p>Dodatkowe Informacje:</p>";
    if(isset($_POST['dyslexia']))
       echo "Dysleksja </br>";
    if(isset($_POST['disability']))
       echo "Niepełnosprawność </br>";
?>
