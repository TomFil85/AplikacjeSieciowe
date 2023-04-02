<?php namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\TowarSearchForm;

class TowarListCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new TowarSearchForm();
	}
		
	public function validate() {
        $this->form->nazwa = ParamUtils::getFromRequest('sf_nazwa');
        return !App::getMessages()->isError();
    }

    public function load_data() {
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
            $this->records = App::getDB()->select("towar", [
                "id_towar",
                "nazwa",
               	"cena",
                "kalorie"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_towarList() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('TowarListFullPage.tpl');
    }

    public function action_towarListPart() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('TowarListTable.tpl');
    }
}