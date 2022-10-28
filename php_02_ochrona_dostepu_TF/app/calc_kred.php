<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów

function getParams(&$kwota,&$ile_lat,&$ile_procent){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$ile_lat = isset($_REQUEST['ile_lat']) ? $_REQUEST['ile_lat'] : null;
	$ile_procent = isset($_REQUEST['ile_procent']) ? $_REQUEST['ile_procent'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku


function validate(&$kwota,&$ile_lat,&$ile_procent,&$messages){
	
	if ( ! (isset($kwota) && isset($ile_lat) && isset($ile_procent))) {
		return false;
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
	if (count ( $messages ) != 0) 
                return false;
        
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	if (! is_numeric( $ile_lat )) {
		$messages [] = 'Ilość lat nie jest liczbą całkowitą';
	}
	if (! is_numeric( $ile_procent )) {
		$messages [] = 'Ile procent nie jest liczbą rzeczywistą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}


// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$kwota,&$ile_lat,&$ile_procent,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$ile_procent = floatval($ile_procent);
	$ile_lat = intval($ile_lat);
	$pom=$kwota/($ile_lat*12);
        
if (empty ( $messages )) { 
	
	$kwota = intval($kwota);
	$ile_procent = floatval($ile_procent);
	$ile_lat = intval($ile_lat);
	$pom=$kwota/($ile_lat*12);
		
	$result = $pom + ($ile_procent/100)*$pom;
	
}	
}

$kwota = null;
$ile_lat = null;
$ile_procent = null;
$result = null;
$messages = array();

getParams($kwota,$ile_lat,$ile_procent);
if ( validate($kwota,$ile_lat,$ile_procent,$messages) ) {
	process($kwota,$ile_lat,$ile_procent,$messages,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_kred_view.php';