1. Dodatkowa ścieżka w routing.php:

linia 19  Utils::addRoute('towarListPart','TowarListCtrl');


2. Dodatkowa metoda akcji w kontrolerze TowarListCtrl.class.php:

linia 84-89 	public function action_towarListPart() {
        	$this->load_data();
        	App::getSmarty()->assign('searchForm', $this->form);
        	App::getSmarty()->assign('records', $this->records);
        	App::getSmarty()->display('TowarListTable.tpl');
    		}


3. Dodanie w nagłówku html w main.tpl: 

linia 10   <script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>


4. TowarListFullPage.tpl:

linia 13 <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm
	('search-form','{$conf->action_root}towarListPart','table'); return false;">

linia 33-35 	<div id="table">
		{include file="TowarListTable.tpl"}
		</div>

5. TowarListTable.tpl: 
  
cały

