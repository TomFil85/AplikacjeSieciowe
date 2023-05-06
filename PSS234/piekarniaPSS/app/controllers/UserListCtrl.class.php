<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\UserSearchForm;

class UserListCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new UserSearchForm();
    }

    public function validate() {
        $this->form->nazwa = ParamUtils::getFromRequest('sf_nazwa');
        return !App::getMessages()->isError();
    }

    public function action_showUser() {
        $this->validate();
        $search_params = [];
        if (isset($this->form->nazwa) && strlen($this->form->nazwa) > 0) {
            $search_params['nazwa[~]'] = $this->form->nazwa . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["ORDER"] = "nazwa";

        try {
            $this->records = App::getDB()->select("user", [
                "id_user",
                "nazwa",
                "haslo",
                "email",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('UserView.tpl');
    }
     
}