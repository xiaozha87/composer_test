<?php
require_once "vendor/autoload.php";

$hello = new Xiaozha\Composer_test\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Xiaozha\Composer_test\Hello('My Goddess');
echo $hiGirl->hello();

