<?
spl_autoload_register(function($classname){
	$classname = str_replace('\\', '/', $classname);
	require_once(__DIR__."/include/$classname.php");
});