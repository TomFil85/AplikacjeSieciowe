{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>Piekarnia</h1>
	</div>

{/block}

{block name=content}
	<div class="content">
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
	{/block}

	{block name=bottom}

	 {/block}
</div>
</div>
</div>
</div>
</body>
</html>