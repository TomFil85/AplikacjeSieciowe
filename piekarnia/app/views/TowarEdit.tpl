{extends file="main.tpl"}

{block name=top}
	<div id="main">
	<div class="header">
		<h1>Piekarnia</h1>
	</div>
	{/block}

{block name=content}

<div class="bottom-margin">
<form action="{$conf->action_root}towarSave" method="post" class="pure-form pure-form-aligned">
	
    <fieldset>
		<legend>Informacje o produkcie</legend>
		<div class="pure-control-group">
            <label for="nazwa">Nazwa</label>
            <input id="nazwa" type="text" placeholder="Nazwa" name="nazwa" value="{$form->nazwa}">
        </div>
		<div class="pure-control-group">
            <label for="cena">Cena</label>
            <input id="cena" type="text" placeholder="Cena" name="cena" value="{$form->cena}">
        </div>
		<div class="pure-control-group">
            <label for="kalorie">Kalorie</label>
            <input id="kalorie" type="text" placeholder="kalorie" name="kalorie" value="{$form->kalorie}">
        </div>
       
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}albumList">Powrót</a>
		</div>
	</fieldset>
    
    
    <input type="hidden" name="id_towar" value="{$form->id_towar}">
</form>	
</div>

{/block}
</div>
</div>
</body>
</html>