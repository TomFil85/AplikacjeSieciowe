<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\UserEditForm;

class UserEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new UserEditForm();
    }

    public function validateSave() {
        $this->form->user_id = ParamUtils::getFromRequest('id_user', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();

        $this->form->nazwa = $v->validateFromPost('nazwa', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj login:',
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Login od 2 do 50 znaków'
		]);
        $this->form->haslo = $v->validateFromPost('haslo', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj hasło:',
            'min_length' => 8,
            'max_length' => 32,
            'validator_message' => 'Hasło od 8 do 32 znaków'
        ]);
        
        $this->form->email = $v->validateFromPost('email', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj email:',
            'email' => true,
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Niepoprawny email'
		]);
       
        $this->form->haslo2 = $v->validateFromPost('haslo2', [
            'trim' => true,
            'required' => true,
            'required_message' => "Potwierdź nowe hasło",
            'min_length' => 8,
            'max_length' => 32,
            'validator_message' => 'Hasło nie jest takie samo'
        ]);
        if($this->form->haslo != $this->form->haslo2){
            Utils::addErrorMessage('Hasło nie zgadza sie');
            App::getMessages()->isError();
        }

        return !App::getMessages()->isError();
    }


    public function validateEdit() {
        $this->form->id_user = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_userNew() {
        $this->generateView();
    }

    public function action_userEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("user", "*", [
                    "id_user" => $this->form->id_user
                ]);
                $this->form->nazwa = $record['nazwa'];
                $this->form->haslo = $record['haslo'];
                $this->form->email = $record['email'];
               
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_userDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("user", [
                    "id_user" => $this->form->id_user
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('loginShow');
    }

    public function action_userSave() {
        if ($this->validateSave()) {
            try {
                if ($this->form->id_user == NULL) {
                    $count = App::getDB()->count("user");
                    if ($count <= 20) {
                        App::getDB()->insert("user", [
                            "nazwa" => $this->form->nazwa,
                            "haslo" => $this->form->haslo,
                            "email" => $this->form->email
                            
                        ]);
                    } else {
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView();
                        exit();
                    }
                } else {
                    App::getDB()->update("user", [
                        "nazwa" => $this->form->nazwa,
                        "haslo" => $this->form->haslo,
                        "email" => $this->form->email
                        
                            ], [
                        "id_user" => $this->form->id_user
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('loginShow');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterView.tpl');
    }
}