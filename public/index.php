<?php
require_once '../vendor/autoload.php';
$hello = new App/Hello;
$say=$hello->talk();
echo $say;
