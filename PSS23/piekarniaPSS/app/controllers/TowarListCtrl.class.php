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
      
         $aktualna_strona = isset($_GET['page']) ? intval($_GET['page']) : 1;
         $limit_na_stronie = 8;
         $offset = ($aktualna_strona - 1) * $limit_na_stronie;

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
        $where["LIMIT"] = [$offset, $limit_na_stronie];
        $where ["ORDER"] = "nazwa";

        try {
            $this->records = App::getDB()->select("towar", [
                "id_towar",
                "nazwa",
               	"cena",
                "kalorie"
                    ], $where);
            
            $total_records = App::getDB()->count("towar", $where);
            
            $total_pages = ceil($total_records / $limit_na_stronie);
            
            $pagination = [
                'current_page' => $aktualna_strona,
                'total_pages' => $total_pages,
                'has_previous_page' => ($aktualna_strona > 1),
                'has_next_page' => ($aktualna_strona < $total_pages),
                'previous_page_link' => '?page=' . ($aktualna_strona - 1),
                'next_page_link' => '?page=' . ($aktualna_strona + 1)
            ];

        App::getSmarty()->assign('pagination', $pagination);
        App::getSmarty()->assign('page', $aktualna_strona);
        App::getSmarty()->assign('limit', $limit_na_stronie);            
          
            
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