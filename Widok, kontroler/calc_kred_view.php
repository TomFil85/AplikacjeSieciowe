<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_kred.php" method="get">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br />
	<label for="id_ile_lat">Na ile lat: </label>
	<input id="id_ile_lat" type="text" name="ile_lat" value="<?php if (isset($ile_lat)) print($ile_lat); ?>" /><br />
	<label for="id_ile_procent">Ile procent: </label>
	<input id="id_ile_procent" type="text" name="ile_procent" value="<?php if (isset($ile_procent))print($ile_procent); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: blue; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: green; width:300px;">
<?php echo 'Miesięczna rata wynosi: '.$result; ?>
</div>
<?php } ?>

</body>
</html>