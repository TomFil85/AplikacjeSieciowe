{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>Piekarnia</h1>
		<h2></h2>
	</div>
	{/block}

{block name=content}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Haslo: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
	<div class="pure-controls">
<a class="pure-button pure-button-primary" href="{$conf->action_root}userNew">Zarejestruj się</a>
</div>
</form>


{/block}
</div>
</div>
</body>
</html>