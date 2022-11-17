<?php
require_once 'init.php';

// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.
// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.
// Nowością jest sama klasa ClassLoader oraz utworzenie obiektu tej klasy w skrypcie init z dostępem jak dla
// wcześniejszych obiekkót za pomocą funkcji getLoader(). Pozwala ona automatycznie załadować klasy umieszczone
// w głównym folderze aplikacji - w podfolderach zgodnie z ich przestrzeniami nazw (które są częścią pełnej nazwy klasy).
// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.
// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app


switch ($action) {
	default :		
            //  include_once 'app/controllers/CalcCtrl.class.php';
            // (autoloader sam załaduje plik na podstawie przestrzeni nazw względem folderu głównego aplikacji)
		
		$ctrl = new app\controllers\CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calc_kredCompute' :	
             //include_once 'app/controllers/CalcCtrl.class.php';
		
                $ctrl = new app\controllers\CalcCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
            print ('qwerttyuiop');
	break;
	case 'action2' :
            print ('qwerttyuiop2');
	break;
}
