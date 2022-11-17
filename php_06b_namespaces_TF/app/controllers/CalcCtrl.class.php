<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)
// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.
// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;
//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	
	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->na_ile_lat = getFromRequest('na_ile_lat');
		$this->form->ile_procent = getFromRequest('ile_procent');
	}
	
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->na_ile_lat ) && isset ( $this->form->ile_procent ))) {
			return false; //zakończ walidację z błędem
		} 
                
                /*else { 
			$this->hide_intro = true; 
		}*/
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->na_ile_lat == "") {
			getMessages()->addError('Nie podano na ile lat');
		}
                if ($this->form->ile_procent == "") {
			getMessages()->addError('Nie podano na ile procent');
		}
		
		if (! getMessages()->isError()) {
			
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->na_ile_lat )) {
				getMessages()->addError('Na ile lat nie jest liczbą całkowitą');
			}
                        if (! is_numeric ( $this->form->ile_procent )) {
				getMessages()->addError('Ile procent nie jest liczbą rzeczywistą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function process(){

		$this->getParams();	
                
		if ($this->validate()) {				
			//konwersja parametrów
			$this->form->kwota = intval($this->form->kwota);
			$this->form->na_ile_lat = intval($this->form->na_ile_lat);
			$this->form->ile_procent = floatval($this->form->ile_procent);
                        getMessages()->addInfo('Parametry poprawne.');
				
			$this->form->pom=$this->form->kwota/($this->form->na_ile_lat*12);
	                $this->result->result = $this->form->pom + ($this->form->ile_procent/100)*$this->form->pom;			
			getMessages()->addInfo('Wykonano obliczenia.');
		}		
		$this->generateView();
	}
	
	public function generateView(){
            
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
	      //getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','namespaces');			
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc_kred.tpl');
                // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
