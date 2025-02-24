<?php
/*
Author:     T.K
Date:       21-2-2025

Subject:    Functies module voor oefening 4.2
*/



function CheckTrafficLight( $kleur, $geen_ambu = 1 ) {
	$sampletext = "<h3>";
	// $kleur
	// 0 = GROEN
	// 1 = ORANJE
	// 2 = ROOD
	if ( $geen_ambu ) {
		if ( $kleur ) {
			$sampletext .= "STOP!!!";
		} else {
			$sampletext .= "U MAG DOORRIJDEN!!!";
		}
	} else {
		$sampletext .= "STOP, ER KOMT EEN AMBULANCE AAN!!!";
	}
	$sampletext .= "<img src='" . $kleur . ".png' height='300' width='300'></img>";
	if ( !$geen_ambu) { $sampletext .= "<img src='ambu.png' height='300' width='300'></img>"; }
	return $sampletext .= "</h3>";
}

function ShowMenu( $dag ) {
	$sampletext = "<h3>MENUKAART ";
	$items = array("Terreur Tostie","Stink Croissant","Horror Hamburgers","Monster Worst","Reuzen Teen","Griezel Soep","Broodje Chupacabra","Vergifte Appeltaart");
	// $dag
	// 0 = MAANDAG
	// TOT
	// 6 = ZONDAG
	switch ( $dag ) {
		case 0:
			$sampletext .= "MAANDAG</h3>
			<p>{$items[0]} - {$items[3]} - {$items[5]}</p>";
			break;
		case 1:
			$sampletext .= "DINSDAG</h3>
			{$items[0]} - {$items[1]} - {$items[2]} - {$items[6]}";
			break;
		case 2:
			$sampletext .= "WOENSDAG</h3>
			{$items[1]} - {$items[2]} - {$items[3]} - {$items[7]}";
			break;
		case 3:
			$sampletext .= "DONDERDAG</h3>
			{$items[2]} - {$items[3]} - {$items[4]} - {$items[6]} - {$items[7]}";
			break;
		case 4:
			$sampletext .= "VRIJDAG</h3>
			{$items[0]} - {$items[1]} - {$items[2]} - {$items[5]}";
			break;
		case 5:
			$sampletext .= "ZATERDAG</h3>
			{$items[4]}";
			break;
		case 6:
			$sampletext .= "ZONDAG</h3>
			{$items[7]}";
			break;
		default:
			$sampletext .= "NIET VANDAAG BESCHIKBAAR</h3>";
	}
	return $sampletext;
}
?>