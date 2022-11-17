<?php
require_once 'init.php';

// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.
// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.
// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.
// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app


switch ($action) {
	default :		
                include_once 'app/controllers/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calc_kredCompute' :	
                include_once 'app/controllers/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
            print ('qwerttyuiop');
	break;
	case 'action2' :
            print ('qwerttyuiop2');
	break;
}
