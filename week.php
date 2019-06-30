<?
	require_once "autoloade.php";
	$head = new Head();

	echo "<div id='content'>";

	//$plan_day = new PlanDay();

	$cur_year = 2019;
	$cur_month = 7;
	$cur_day = 1;

	for($i=0; $i<7;i++){
		$day = mktime (0, 0, 0, $cur_month, $cur_day + $i, $cur_year);
		echo "$day";
		//$plan_day->print($day);
	}

	echo "</div>"
?>
