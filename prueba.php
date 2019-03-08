<?php

session_start();
$id = md5("PRO1");

var_dump($_SESSION['cart'][$id]);

?>