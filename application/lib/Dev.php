<?php

ini_set('displat_errors', 1);
error_reporting(E_ALL);

function debug() {
	echo '<pre>';
	var_dump($str);
	echo '<pre>';
	exit;
}