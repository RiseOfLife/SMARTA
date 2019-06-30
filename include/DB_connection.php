<?
class DB_connection{
	const HOST = "localhost";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB = "db_kapris";
	public $connection;

	public function __construct()
	{
		$this->connection = mysqli_connect( self::HOST, self::DB_USER, self::DB_PASSWORD, self::DB );
	}

	public function test(){
		if($this->connection)
		echo 'Соединение установлено.';
		else
		echo'Ошибка подключения к серверу баз данных.';
	}

	public function query($query){
		$result = mysqli_query($this->connection, $query);
		$myrow = mysqli_fetch_array($result);
			return $myrow;
	}

	public function noQuery($query){
		return mysqli_query($this->connection, $query);
	}
}
?>