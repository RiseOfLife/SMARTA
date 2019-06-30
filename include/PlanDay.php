<?
class PlanDay{
	public function __construct(){
}

public function print($day){
	
	echo "<div class='week'>"
	$week=array(0=>"Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");
	echo "<div class='week_title'>$week[date("w", $day)]</div>";
	
	// Заглушка запроса информации из базы данных
	$task_list = array(0=>, "Математика", "Русский яз.", "Литература", "Черчение");
	
	// Вывод информации по заданиям на экран
	foreach($task_list as &$value)
		echo "
			<div class='task'><a href='#'><img src='../lesson_placeholder.png'><p>$value</p></a></div>
			";
		
	echo "</div>";
	}
}
?>