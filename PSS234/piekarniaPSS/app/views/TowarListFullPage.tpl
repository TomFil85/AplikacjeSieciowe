{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>Piekarnia</h1>
	</div>

{/block}

{block name=content}
	<div class="content">
        <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}towarListPart','table'); return false;">
	<h2 class="content-subhead">Rodzaj pieczywa</h2>
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}towarList">
		<fieldset>
                    
			<input id="searchform" type="text" placeholder="nazwa" name="sf_nazwa" value="{$searchForm->nazwa}" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
		</form>
	</div>
                        
                        
                        

	{if \core\RoleUtils::inRole("admin")}
	<div class="bottom-margin">
	<a class="pure-button button-success" href="{$conf->action_root}towarNew">Dodaj towar</a>
	</div>	
	{/if}
	<div id="table">
	{include file="TowarListTable.tpl"}
	</div>
        
        
        
        
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
        
        
	{/block}

	
</div>
</div>
</div>
</div>
</body>
</html>