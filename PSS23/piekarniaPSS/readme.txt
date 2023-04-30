1. Zmiana w TowarListCtr.class.php

linia 26-28
         $aktualna_strona = isset($_GET['page']) ? intval($_GET['page']) : 1;
         $limit_na_stronie = 8;
         $offset = ($aktualna_strona - 1) * $limit_na_stronie;


linia 41
$where["LIMIT"] = [$offset, $limit_na_stronie];


linia 52-67
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



2. Zmiana w TowarListFullPage.tpl

linia 35-48
{if $pagination.total_pages > 1}
		<div>
		{if $pagination.has_previous_page}
		<a class="pure-button" href="{$pagination.previous_page_link}">&laquo; Poprzednia </a>
		{/if}
	        {foreach range(1, $pagination.total_pages) as $page_number}
		{if $page_number == $pagination.current_page}
		<span class="pure-button" disabled="">{$page}</span>
		{else}
		<a class="pure-button" href="{$conf->action_url}tab?page={$page_number}">{$page_number}</a>
		{/if}
	        {/foreach}
		<br><br>
	        {if $pagination.has_next_page}
		<a class="pure-button" href="{$pagination.next_page_link}">Następna &raquo;</a>
	        {/if}
		</div>
	{/if}


