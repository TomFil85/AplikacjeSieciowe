<?php

use app\transfer\User;

//inicjacja mechanizmu sesji
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// próba pobrania danych użytkownika z sesji
// LUB pobranie całego obiektu z sesji
$user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;

//jeśli brak parametru lub danych (niezalogowanie) to wyświetl stronę logowania
if ( ! (isset($user) && isset($user->login) && isset($user->role)) ){
	$ctrl = new app\controllers\LoginCtrl();
	$ctrl->generateView();
	exit();
}
//jeśli ok to idź dalej, a system ma do dyspozycji obiekt klasy User
