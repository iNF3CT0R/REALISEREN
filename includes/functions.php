<?php
/*
Author:     Rob Wessels
Date:       feb 2021

Subject:    T3 REA oef 4.2 en 4.3 functions
*/

// Oefening 4.2 Taak 1
function checkTrafficLight($color, $ambulance)
{
    if($ambulance != true)
    {
        if($color == "oranje" || $color == "rood")
        {
            echo"U moet stoppen";
        }
        else
        {
            echo"U mag doorrijden";
        }
    }
    else
    {
        echo"Er komt een ambulance. U mag in geen geval doorrijden.";
    }
}

// Oefening 4.2 Taak 2
function checkLadiesNight($gender, $age)
{
    if($age >= 18 && $gender == "vrouw" || $age >= 70)
    {
        echo "Leeftijd: " . $age . "</br>" . "Geslacht: " . $gender . "</br>" . "U heeft gratis entree!";
    }
    else
    {
        echo "Leeftijd: " . $age . "</br>" . "Geslacht: " . $gender . "</br>" . "U betaalt: &euro; 25,=";
    }
}

// https://www.w3schools.com/php/php_switch.asp
// Oefening 4.2 Taak 2
function showMenu($day)
{
    echo"Vandaag eten we ";     // begin van de zin
    switch ($day)
    {
        case "maandag":
            echo "gehaktbal";
            break;
        case "dinsdag":
            echo "knakworst";
            break;
        case "woensdag":
            echo "groentenburger";
            break;
        case "donderdag":
            echo "lasagne";
            break;
        case "vrijdag":
            echo "vis";
            break;
        case "zaterdag":
            echo "frietekes";
            break;
        case "zondag":
            echo "rösti";
            break;
        default:
            echo "helemaal niks";
    }
    echo".";    // punt

}




// Oefening 4.3 Taak 2 - Whileloop
function calculateInterest($pricetagLittleCar, $savedAmount)
{
    echo "Een leuk tweedehands autootje kost " . $pricetagLittleCar . " euro. Ik heb " . $savedAmount . " euro gespaard. </br>Ik zet het geld op de bank en ik krijg daarop een waanzinnige rente van 6 % per maand! </br>Ik ga met een while-loop uitrekenen hoeveel maanden ik moet wachten om de " . $pricetagLittleCar . " te kunnen betalen.</br>";

    $counter = 0;
    while($savedAmount < $pricetagLittleCar)
    {
        $counter++;
        $savedAmount *= 1.06;       // of: $savedAmount = $savedAmount * 1.06;
        echo"Op maand nr. " . $counter . " heb ik gespaard: " . number_format($savedAmount, 2, ',', '') . "</br>";
    }
    echo"</br>Jippie! Het is me gelukt: ik heb na " . $counter . " maanden genoeg gespaard voor mijn leuke tweedehandse autootje";
    echo"</br>Ik houd dan zelfs nog &euro; " . number_format(($savedAmount - $pricetagLittleCar), 2, ',', ''). " over!";
}

// Oefening 4.3 Taak 3 - Piramid
function createPiramid($piramideTop)
{
    for ($i=2;$i<=$piramideTop+1;$i++)		// hij voert 9 X de loop uit die hierin staat
    {
        for ($j=1;$j<$i;$j++)	            // deze loop kijkt naar de waarde van $i.
        {						            // Die is eerst 2, $j = 1, dus deze 					wordt 1x uitgevoerd. Print '1'
            echo $j;			            // Dan een br/, en dan komt de 		tweede loop. $i = 3, dus $j (begint
            // weer bij 1) wordt 2x uitgevoerd. Daarna zijn $i en $j gelijk en
        }						            // stopt de inner loop. Print: 12 	(oftewel: 1, en direct daarna 2)
        echo '<br/>';			            // etc.....
    }							            // --> tot hier: 123456789.

    // ADVANCED: terugtellend
    for ($k=$piramideTop;$k>0;$k--)		    // Hier gebeurt het omgekeerde. $k heeft waarde 9, dus de
    {							            // inner loop wordt 8 keer uitgevoerd (1 plus 2 plus 3 etc)
        for ($l=1;$l<$k;$l++)	            // vervolgens maken we van 9 een 8 en wordt op de volgende
        {						            // regel (na de br/ dus) de inner loop 7 keer uitgevoerd.
            echo $l;
        }
        echo '<br/>';
    }
}

?>