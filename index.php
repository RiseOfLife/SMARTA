<?
	require_once "autoloade.php";
	$head = new Head();

	echo "<div id='content'>";

	$button = new Button();

	$button->print("../img/planer.png", "Расписание");
	$button->print("../img/progress.png", "Баллы");
	$button->print("../img/notes.png", "Тетради");
	$button->print("../img/textbook.png", "Учебники");
	$button->print("../img/disciplines.png", "Дисциплины");
	$button->print("../img/repititors.png", "Репетиторы");
	$button->print("../img/messages.png", "Сообщения");
	$button->print("../img/apps.png", "Приложения");
	$button->print("../img/video_lessons.png", "Видеоуроки");
	$button->print("../img/options.png", "Настройки");



	echo "</div>"
?>
