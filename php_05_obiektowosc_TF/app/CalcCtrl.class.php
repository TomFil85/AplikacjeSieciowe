<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro


	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->na_ile_lat = isset($_REQUEST ['na_ile_lat']) ? $_REQUEST ['na_ile_lat'] : null;
		$this->form->ile_procent = isset($_REQUEST ['ile_procent']) ? $_REQUEST ['ile_procent'] : null;
	}
	
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->na_ile_lat ) && isset ( $this->form->ile_procent ))) {
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; 
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->na_ile_lat == "") {
			$this->msgs->addError('Nie podano na ile lat');
		}
                if ($this->form->ile_procent == "") {
			$this->msgs->addError('Nie podano na ile procent');
		}
		
		if (! $this->msgs->isError()) {
			
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->na_ile_lat )) {
				$this->msgs->addError('Na ile lat nie jest liczbą całkowitą');
			}
                        if (! is_numeric ( $this->form->ile_procent )) {
				$this->msgs->addError('Ile procent nie jest liczbą rzeczywistą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	public function process(){

		$this->getparams();	
                
		if ($this->validate()) {				
			//konwersja parametrów
			$this->form->kwota = intval($this->form->kwota);
			$this->form->na_ile_lat = intval($this->form->na_ile_lat);
			$this->form->ile_procent = floatval($this->form->ile_procent);
                        $this->msgs->addInfo('Parametry poprawne.');
				
			$this->form->pom=$this->form->kwota/($this->form->na_ile_lat*12);
	                $this->result->result = $this->form->pom + ($this->form->ile_procent/100)*$this->form->pom;			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}		
		$this->generateView();
	}
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		//$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');				
		$smarty->assign('hide_intro',$this->hide_intro);		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc_kred.tpl');
	}
}
