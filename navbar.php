<?php

include_once 'functions.php';

$nav = [
		'Winkel' => 'shop.html',
		'Inloggen' => 'login.html',
	];
	
	echo createList($nav, 'navbar');
	
?>