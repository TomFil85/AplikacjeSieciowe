<?php namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\TowarEditForm;
use Medoo\Medoo;

class TowarEditCtrl {

	private $form;

	public function __construct(){
		$this->form = new TowarEditForm();
	}
	
	public function validateSave() {
		$this->form->id_towar = ParamUtils::getFromPost('id_towar',true,'Błędne wywołanie aplikacji');
		$v = new Validator();

     
        $this->form->nazwa = $v->validateFromPost('nazwa', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nazwe towaru:',
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Nazwa towaru od 2 do 50 znaków'
        ]);
      
	$this->form->cena = $v->validateFromPost('cena', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj cenę:',
            'float' => true,
			'min_length' => 2,
			'max_length' => 20,
			'validator_message' => "Niepoprawny format ceny. (00.00)"
		]);
        $this->form->kalorie = $v->validateFromPost('kalorie', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj ile kalorii:',
            'float' => true,
			'min_length' => 1,
			'max_length' => 20,
			'validator_message' => "Niepoprawny format kalorii.)"
		]);
                
        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id_towar = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function action_towarNew() {
        $this->generateView();
    }

    public function action_towarEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("towar", "*", [
                    "id_towar" => $this->form->id_towar
                ]);
                $this->form->nazwa = $record['nazwa'];
                $this->form->cena = $record['cena'];
                $this->form->kalorie = $record['kalorie']; 
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }
    
    public function action_towarDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("towar", [
                    "id_towar" => $this->form->id_towar
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('towarList');
    }
    
    public function action_towarSave() {
        if ($this->validateSave()) {
            try {
                if($this->form->id_towar == NULL) {
                    $count = App::getDB()->count("towar");
                    if ($count <= 20) {
                        App::getDB()->insert("towar", [
                            "nazwa" => $this->form->nazwa,
                            "cena" => $this->form->cena,
                            "kalorie" => $this->form->kalorie
                        ]);
                    } else {
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView();
                        exit(); 
                    }
                } else {
                    App::getDB()->update("towar", [
                            "nazwa" => $this->form->nazwa,
                            "cena" => $this->form->cena,
                            "kalorie" => $this->form->kalorie
                        ], [
                            "id_towar" => $this->form->id_towar
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('towarList');
        } else {
            $this->generateView();
        }
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('TowarEdit.tpl');
    }
}