<?php
require_once __DIR__.'\..\vendor\autoload.php';
$hello= new \App\Hello;
$say=$hello->talk();
echo $say;
