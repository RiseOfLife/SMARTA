<?
class Head{
	public function __construct()
	{
		echo " 
		<!DOCTYPE html>
		<html lang='en'>
		<head>
		<meta charset='UTF-8'>
		<title>Test</title>
		<link rel='stylesheet' href='../style/main.css'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
		</head>
		<body>

		<header>

		<div class='logo' id='logo'>
		<a href='#'><img src='../img/logo_name.png' alt='Вызов помощника'></a>
		</div>

		<div class='bell' id='bell'>
		<a href='#'><img src='../img/bell.png' alt='Напоминания ...'></a>
		</div>

		<div id='search'>
		<form>
		<input type='text' placeholder='Искать здесь...'>
		<button type='submit'></button>
		</form>
		</div>
		<div id='clock'></div>
		<script src='../js/clock.js'></script>
		</header>
		";
	}
}
?>