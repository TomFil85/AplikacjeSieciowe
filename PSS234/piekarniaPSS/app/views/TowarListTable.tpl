<table class="pure-table pure-table-bordered">

{foreach $records as $r}
{strip}
<div class="pure-u-1-4">
<img class="pure-img-responsive" src="{$conf->app_root}/images/chleb.png">

<p>
{$r["nazwa"]} <br>
{$r["cena"]} zł <br>
{$r["kalorie"]} <br>

{if \core\RoleUtils::inRole("admin")}
	<a class="button-small pure-button button-secondary" href="{$conf->action_url}towarEdit/{$r['id_towar']}">Edytuj</a>
	&nbsp;
	<a class="button-small pure-button button-warning" 
        onclick="confirmLink('{$conf->action_url}towarDelete/{$r['id_towar']}','Czy na pewno usunąć rekord ?')">Usuń</a>     
	</div>
	{else}
	<a class="button-small pure-button button-secondary" href="{$conf->action_url}cartNew/{$r['id_towar']}">
		<i class="fa fa-shopping-cart fa-lg"></i>Dodaj do koszyka
	</a>
</p>

</div>
{/if}
{/strip}
{/foreach}
</table>