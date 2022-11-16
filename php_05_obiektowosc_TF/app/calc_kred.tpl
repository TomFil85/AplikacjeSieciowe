{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=footer}TF{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$conf->app_url}/app/calc_kred.php" method="post">
		<fieldset>
	<label for="kwota">Kwota: </label>
	<input id="kwota" type="text"  name="kwota" value="{$form->kwota}">
	<label for="ile_lat">Na ile lat: </label>
	<input id="na_ile_lat" type="text" name="na_ile_lat" value="{$form->na_ile_lat}">
	<label for="ile_procent">Ile procent: </label>
	<input id="ile_procent" type="text" name="ile_procent" value="{$form->ile_procent}">
      
	<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wysokość raty wynosi:</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>

{/block}