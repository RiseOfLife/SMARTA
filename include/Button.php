<?
class Button{
	public function __construct(){
}

public function print($img, $title,$link = "#"){
		echo"
		<div class='button'><a href='$link'><img src='$img' alt='$title'><p>$title</p></a></div>
		";
	}
}
?>