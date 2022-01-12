<?php

include_once 'functions.php';
$arr = [
  'Home'=>'index.php',
  'Skills'=>'skills.php',
  'Opdrachten'=>'opdrachten.php',
  'Contact'=>'contact.php',
  'About'=>'about.php',
  'Admin'=>'Admin.php',
];

echo createList($arr, 'navbar');

?>