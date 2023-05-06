{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>Piekarnia</h1>	
	</div>
	{/block}

{block name=content}



	{foreach $records as $r}
{strip}
<div class="pure-u-1-4">
<img class="pure-img-responsive" src="{$conf->app_root}/images/koszyk.png">
<p>
{section name=customer loop=$id_towar}
	<p>
	{$r["nazwa"]} <br>
	{$r["cena"]} zł<br>
	{$r["kalorie"]} <br>
	
	</p>
	<a class="button-small pure-button button-warning" href="{$conf->action_url}cartDelete/{$r['id_towar']}">Usuń</a>
	{/section}

			
{/strip}
{/foreach}

{/block}

{block name=bottom}
 
{/block}
</div>
</div>
</body>
</html>