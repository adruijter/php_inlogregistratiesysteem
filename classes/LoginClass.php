<?php
	require_once("MySqlDatabaseClass.php");
	require_once("UsersClass.php");

	class LoginClass
	{
		//Fields
		private $id;
		private $email;
		private $password;
		private $userrole;
		private $activated;
		private $activationdate;
		
		//Properties
		public function getId() { return $this->id; }
		public function getEmail() { return $this->email;}
		public function getPassword() { return $this->password; }
		public function getUserrole() { return $this->userrole; }
		public function getActivated() { return $this->activated;}
		public function getActivationdate() { return $this->activationdate; }
		
		public function setId($value) { $this->id = $value; }
		public function setEmail($value) { $this->email = $value;}
		public function setPassword($value) { $this->password = value; }
		public function setUserrole($value) { $this->userrole = $value; }
		public function setActivated($value) { $this->activated = $value;}
		public function setActivationdate($value) { $this->activationdate = value; }
		
		
		//Constructor
		public function __construct() {}
		
		//Methods
		/* Hier komen de methods die de informatie in/uit de database stoppen/halen
		*/
		
		public static function insert_into_database($post)
		{
			global $database;
			
			date_default_timezone_set("Europe/Amsterdam");
			
			$date = date('Y-m-d H:i:s');
			
			$query = "INSERT INTO `login` (`id`,
										   `email`,
										   `password`,
										   `userrole`,
										   `activated`,
										   `activationdate`)
					  VALUES			  (NULL,
										   '".$post['email']."',
										   '".MD5("geheim")."',
										   'customer',
										   'no',
										   '".$date."')";
			//echo $query;
			$database->fire_query($query);
			
			$last_id = mysqli_insert_id($database->getDb_connection());

			UsersClass::insert_into_database($last_id);
			
			echo "Uw gegevens zijn verwerkt.";
			header("refresh:3;url=register_form.php");		
		}
		
	}
?>