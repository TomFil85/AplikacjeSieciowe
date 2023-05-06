{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>Piekarnia</h1>
	</div>
	{/block}

{block name=content}


{if \core\RoleUtils::inRole("admin")}
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}userList">
	<legend>Admin</legend>
	<fieldset>
			<input id="searchform" type="text" placeholder="nazwa" name="sf_nazwa" value="{$searchForm->nazwa}" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
                      
</form>
</div>	


<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>nazwa</th>
		<th>hasło</th>
		<th>edycja</th>
	</tr>
</thead>
<tbody>
{foreach $records as $r}
{strip}
	<tr>
		<td>{$r["nazwa"]}</td>
		<td>{$r["haslo"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}userEdit/{$r['id_user']}">Zmien</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}userDelete/{$r['id_user']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{else}
	<table id="tab_people" class="pure-table pure-table-bordered">
	<thead>
		<tr>
			<th>nazwa</th>
			<th>edycja</th>
		</tr>
</thead>
<tbody>
	<tr>
<td>login</td>
		<td>
			<a class="button-small pure-button button-secondary">Zmiena hasla</a>
		</td>
	</tr>
</tbody>
</table>

{/if}
{/block}

{block name=bottom}
 
 {/block}