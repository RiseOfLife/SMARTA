<?
class User{
	private $db;
	public $id;
	public $login;
	private $password; 
	public $group;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function conn(){
	}

	//Метод добавляет пользователя в БД
	public function add(array $userDate)
	{
		//print_r($this->db->query("SELECT * FROM users"));
		if (isset($userDate['login'])) { $this->login = $userDate['login']; if ($this->login == '') { unset($this->login);} } 
		if (isset($userDate['password'])) { $this->password=$userDate['password']; if ($this->password =='') { unset($this->password);} }
		if (empty($this->login) or empty($this->password))
		{
			return ("Не заданы логин или пароль");
		}
 //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
		$this->login = stripslashes($this->login); 
		$this->name = stripslashes($userDate[name]);
		$this->position = stripslashes($userDate[position]);
		$this->desc = stripslashes($userDate[desc]);

		$this->login = htmlspecialchars($this->login);
		$this->name = htmlspecialchars($this->name);
		$this->position = htmlspecialchars($this->position);
		$this->desc = htmlspecialchars($this->desc);

 //удаляем лишние пробелы
		$this->login = trim($this->login);
		$hash = password_hash($this->password, PASSWORD_DEFAULT);

 // проверка на существование пользователя с таким же логином
		$result = $this->db->query("SELECT user_id FROM users WHERE login='$this->login'");
		if (!empty($result['user_id'])) {
			return ("Администратор с таким логином уже существует.");
		}

 // если такого нет, то сохраняем данные
		$query = "INSERT INTO users (login, password, description, name, group_id) VALUES('$this->login', '$hash', '$this->desc', '$this->name', '$this->group')";
		$result2 = $this->db->noQuery($query);
    // Проверяем, есть ли ошибки
		if ($result2=='TRUE')
		{
			echo "Администратор <b>$login</b> добавлен";
		} else{
			echo "Где-то в запросе ошибка";
		}
	}

	//Метод обновляет данные пользователя
	public function update(/*array $userDate*/)
	{
		echo "<center>обновление</center>";
	}

	//Метод удаляет пользователя из БД
	public function remove($user_id)
	{
		echo "<center>удаление</center>";
		$query = "DELETE FROM users WHERE user_id = $user_id";
		$this->db->noQuery($query);
	}

	public function getDataUser($user_id)
	{
		$query = "SELECT * FROM users WHERE user_id=$user_id";
		$result = $this->db->query($query);
    // Проверяем, есть ли ошибки
		if (count($result)!==0)
		{
			return $result;
		} else{
			echo "Пользователь не найден";
		}
	}
}
?>