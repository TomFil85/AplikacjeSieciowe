<?php

require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

// 1. pobranie parametrów
function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['ile_lat'] = isset($_REQUEST['ile_lat']) ? $_REQUEST['ile_lat'] : null;
        $form['ile_procent'] = isset($_REQUEST['ile_procent']) ? $_REQUEST['ile_procent'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){

	if ( ! (isset($form['kwota']) && isset($form['ile_lat']) && isset($form['ile_procent'])))
            return false;	
	 
	$hide_intro = true;

	if ( $form['kwota'] == "")  $msgs[] = 'Nie podano kwoty';
        if ( $form['ile_lat'] == "") $msgs [] = 'Nie podano na ile lat';
        if ( $form['ile_procent'] == "") $msgs [] = 'Nie podano na ile procent';
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
	if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota nie jest liczbą całkowitą';
	if (! is_numeric( $form['ile_lat'] )) $msgs [] = 'Ilość lat nie jest liczbą całkowitą';
	if (! is_numeric( $form['ile_procent'] )) $msgs [] = 'Ile procent nie jest liczbą rzeczywistą';    
        }
			
	if (count ($msgs) > 0) return false;
	else return true;
}
	
// 3. wykonanie obliczeń
function process(&$form,&$infos,&$msgs,&$result){
	
	$form['kwota'] = intval($form['kwota']);
	$form['ile_procent'] = floatval($form['ile_procent']);
	$form['ile_lat'] = intval($form['ile_lat']);
	$form['pom']=$form['kwota']/($form['ile_lat']*12);
	$result = $form['pom'] + ($form['ile_procent']/100)*$form['pom'];
}

// 4. inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

// 5. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 6. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');