<?php
/**
 * User: T.K
 * Date: 14-2-2025
 * File: oefening 3.1
 */

include "../includes/header.php";
include "../includes/nav.php";
?>
<html>
    <body>
        <main id="wrapper">
            <h2>
                Uitwerking oefening 3.1
            </h2>

            <?php
				$woord = array( 
					"<mark>Carnaval</mark>",
					"<mark>carnaval</mark>",
					"<mark>3</mark>",
					"<mark>zondag, maandag en dinsdag</mark>", 
					"<mark>40</mark>",
					"<mark>Nederland</mark>",
					"<mark>Noord-Brabant</mark>",
					"<mark>Worstenbrood</mark>,
					<mark>koffie Schrobbele</mark>" );
                $story = "<p>{$woord[0]} is van oorsprong een gekerstend heidens volksfeest. Het duurt officieel {$woord[2]} dagen, {$woord[3]} direct voorafgaand aan de vastentijd van {$woord[4]} dagen. {$woord[0]} is bij uitstek het feest van zotheid, spot en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel {$woord[5]} een gebruik om {$woord[1]} op carnavalsvrijdag te openen. Op Aswoensdag wordt {$woord[1]} afgesloten, maar de tradities verschillen per regio. In het overgrote deel van {$woord[6]} wordt er afgesloten met {$woord[7]} soms met een Brabantse koffietafel.</p>";
				echo '<h3>Taak 1</h3>';
				echo "<p>{$story}</p>"
            ?>
            <h3>Taak 2</h3>
            <?php
				$bonnen = array( 20, 35, 40 );
				$totaal = $bonnen[0] + $bonnen[1] + $bonnen[2];
				$perpersoon = $totaal / 4;
				echo "<p>Je bent met 4 vrienden wat gaan drinken. Jullie hebben 3 bonnetjes die je moet betalen, maar je wilt natuurlijk het totaalbedrag weten en de kosten verdelen.</p>";
                echo "<p>Het totaalbedrag is €{$totaal},-</p>";
                echo "<p>Kosten per persoon bedragen: €{$perpersoon}.</p>";
            ?>
            <h3>Challenge</h3>
            <?php
				$challenge = round( ($totaal - 50) * 1.1 / 4,2);
				echo "<p>Omdat jullie zo goed zijn geholpen besluiten jullie 10% fooi te geven aan het personeel. Verder heeft één van jullie een tegoedbon van 50,- die van het totaal mag worden afgehaald (Dus niet van die persoon zelf).</p>";
                echo "<p>De totaalkosten inclusief fooi zijn €{$challenge} per persoon.</p>";
            ?>
        </main>
    </body>
</html>