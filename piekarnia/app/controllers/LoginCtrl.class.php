<?php namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
		
	public function validate() {
		$this->form->login = ParamUtils::getFromRequest('login');
		$this->form->pass = ParamUtils::getFromRequest('pass');
		
		

		if (!isset($this->form->login)) return false;
		
		if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

		if (App::getMessages()->isError()) return false;

        try {
            $addrole = App::getDB()->get("user", [
                "nazwa",
                "haslo"], ["nazwa" => ParamUtils::getFromRequest('login')]
			
			);
		
		if ($this->form->login == "admin" && $this->form->pass == "admin") {
            RoleUtils::addRole('admin');
        } else if ($this->form->login == $addrole['nazwa'] && $this->form->pass == $addrole['haslo']) {
			RoleUtils::addRole('user');
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }
		} catch (\PDOException $e) {
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
			if (App::getConf()->debug)
				Utils::addErrorMessage($e->getMessage());
		}
        return !App::getMessages()->isError();
    }

	public function action_loginShow() {
        $this->generateView();
    }
	
	public function action_login(){
		if ($this->validate()){
			Utils::addErrorMessage('Poprawnie zalogowano do systemu');
			App::getRouter()->redirectTo("towarList");
		} else {
			$this->generateView(); 
		}		
	}
	
	public function access_verification(){
		if ($this->validate()){
		RoleUtils::requireRole($admin, $fail_action = null);
		}
	}

	public function action_logout(){
		session_destroy();
		App::getRouter()->redirectTo('towary');
	}	
	
	public function generateView(){
		App::getSmarty()->assign('form', $this->form);
		App::getSmarty()->display('LoginView.tpl');		
	}
}