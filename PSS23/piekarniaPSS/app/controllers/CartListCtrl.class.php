<?php namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\CartSearchForm;

class CartListCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new CartSearchForm();
	}
	
	 public function validateCart() {
        $this->form->id_towar = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_cartNew() {
        if ($this->validateCart()) {
            $items = [];
            if (isset($this->form->id_towar) && strlen($this->form->id_towar) > 0) {
                $items['id_towar[~]'] = $this->form->id_towar;
            }

            $num_params = sizeof($items);
        if ($num_params > 1) {
            $where = ["AND" => &$items];
        } else {
            $where = &$items;
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

            $this->generateView();
        }
        public function action_cartDelete() {
               
        }
        
        public function action_cartShow() {
            $this->generateView();
        }

    public function generateView() {
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('CartView.tpl');
    }
}