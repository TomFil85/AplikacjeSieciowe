<?php
require_once dirname(__FILE__).'/../config.php';

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$ile_lat = $_REQUEST ['ile_lat'];
$ile_procent = $_REQUEST ['ile_procent'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

if ( ! (isset($kwota) && isset($ile_procent) && isset($ile_lat))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $ile_lat == "") {
	$messages [] = 'Nie podano na ile lat';
}
if ( $ile_procent == "") {
	$messages [] = 'Nie podano na ile procent';
}

if (empty( $messages )) {
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	if (! is_numeric( $ile_lat )) {
		$messages [] = 'Ilość lat nie jest liczbą całkowitą';
	}
	if (! is_numeric( $ile_procent )) {
		$messages [] = 'Ile procent nie jest liczbą rzeczywistą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { 
	
	$kwota = intval($kwota);
	$ile_procent = floatval($ile_procent);
	$ile_lat = intval($ile_lat);
	$pom=$kwota/($ile_lat*12);
		
	$result = $pom + ($ile_procent/100)*$pom;
	
}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_kred_view.php';