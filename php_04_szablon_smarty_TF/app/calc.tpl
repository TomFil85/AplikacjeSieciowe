{extends file="../templates/main.tpl"}

{block name=footer}TF{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$app_url}/app/calc.php" method="post">
		<fieldset>
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="{$form['kwota']}">
	<label for="id_ile_lat">Na ile lat: </label>
	<input id="id_ile_lat" type="text" name="ile_lat" value="{$form['ile_lat']}">
	<label for="id_ile_procent">Ile procent: </label>
	<input id="id_ile_procent" type="text" name="ile_procent" value="{$form['ile_procent']}">
      
	<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Miesięczna rata wynosi: </h4>
	<p class="res">
	{$result}
	</p>
{/if}

</div>
</div>

{/block}