{extends file="main.tpl"}

{block name=content}

<div class="bottom-margin">
<form action="{$conf->action_root}userSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Rejestracja użytkownika</legend>
		<div class="pure-control-group">
            <label for="nazwa">login:</label>
            <input id="nazwa" type="text" placeholder="login" name="nazwa" value="{$form->nazwa}" required>
        </div>
        	<div class="pure-control-group">
            <label for="haslo">hasło:</label>
            <input id="haslo" type="haslo" placeholder="haslo" name="haslo" value="{$form->haslo}" required pattern="{literal}(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}{/literal}">
        </div>
		<div class="pure-control-group">
            <label for="haslo2">potwierdź hasło:</label>
            <input id="haslo2" type="haslo" placeholder="potwierdź hasło" name="haslo2" value="{$form->haslo2}" required>
        </div>
        <div class="pure-control-group">
            <label for="email">email:</label>
            <input id="email" type="email" placeholder="email" name="email" value="{$form->email}" required>
        </div>
	
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}loginShow">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="{$form->id_user}">
</form>	
</div>

{/block}
