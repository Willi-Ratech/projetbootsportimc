<?php
var_dump($_GET);
include_once "data.php";
var_dump($_GET);
$position = $_GET['position'];
$sport= $articles[$position];
var_dump($sport);