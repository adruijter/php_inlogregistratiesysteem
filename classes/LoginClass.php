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
			
			$password = MD5($post['email'].date('Y-m-d H:i:s'));
			
			$query = "INSERT INTO `login` (`id`,
										   `email`,
										   `password`,
										   `userrole`,
										   `activated`,
										   `activationdate`)
					  VALUES			  (NULL,
										   '".$post['email']."',
										   '".$password."',
										   'customer',
										   'no',
										   '".$date."')";
			//echo $query;
			$database->fire_query($query);
			
			$last_id = mysqli_insert_id($database->getDb_connection());

			UsersClass::insert_into_database($last_id, $post);
						
			self::send_email($last_id, $post, $password);
						
			echo "Uw gegevens zijn verwerkt.";
			header("refresh:3;url=register_form.php");		
		}
		
		public static function check_if_email_exists($email)
		{
			global $database;
			
			$query = "SELECT `email`
					  FROM	 `login`
					  WHERE	 `email` = '".$email."'";
					  
			$result = $database->fire_query($query);
			
			//ternary operator
			return (mysqli_num_rows($result) > 0) ? true : false;	
		}
		
		public static function check_if_email_password_exists($email, $password)
		{
			global $database;
			
			$query = "SELECT `email`, `password`
					  FROM	 `login`
					  WHERE	 `email` = '".$email."'
					  AND	 `password` = '".$password."'";
					  
			$result = $database->fire_query($query);
			
			//ternary operator
			return (mysqli_num_rows($result) > 0) ? true : false;	
		}
		
		private static function send_email($id, $post, $password)
		{
			echo $password; exit();
			$to = $post['email'];
			$subject = "Activatiemail Bakker Bart B.V.";
			$message = "Geachte heer/mevrouw <b>".$post['firstname']." ".
											   $post['infix']." ".
											   $post['lastname']."</b><br>";
												
			$message .= '<style>a { color:red;}</style>';
			$message .= "Hartelijk dank voor het registreren op Bakker Bart B.V."."<br>";
			$message .= "Uw registratienummer is: ".$id."<br>";
			$message .= "U kunt de registratie voltooien door op de onderstaande"."<br>";
			$message .= "activatielink te klikken:"."<br>";
			
			$message .= "klik <a href='http://localhost/2014-2015/inlogregistratiesysteem/activate.php?id=".$id."&email=".$post['email']."&password=".$password."'>hier</a> om uw account te activeren"."<br>";
			
			$message .= "U kunt dan vervolgens een nieuw wachtwoord instellen."."<br>";
			$message .= "Met vriendelijke groet,"."<br>";
			$message .= "Arjan de Ruijter"."<br>";
			$message .= "General CEO Bakker Bart B.V."."<br>";
		
			$headers = 'From: no-reply@bakkerbart.nl'."\r\n";
			$headers .= 'Reply-To: webmaster@bakkerbart.nl'."\r\n";
			$headers .= 'Cc: admin@bakkerbart.nl'."\r\n";
			$headers .= 'Bcc: accountant@bakkerbart.nl'."\r\n";
			//$headers .= "MIME-version: 1.0"."\r\n";
			//$headers .= "Content-type: text/plain; charset=iso-8859-1"."\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";		
			$headers .= 'X-Mailer: PHP/' . phpversion();

			
			
			mail( $to, $subject, $message, $headers); 
		}

		public static function activate_account_by_id($id)
		{
			global $database;
			$query = "UPDATE `login`
					  SET `activated` = 'yes'
					  WHERE `id` = '".$id."'";
					  
			$database->fire_query($query);
			echo "<h3>Uw account is geactiveerd. Verander uw wachtwoord.</h3><br>";
		}
		
		public static function update_password($id, $password)
		{
			global $database;
			$query = "UPDATE `login` 
					  SET	 `password` =	'".MD5($password)."'
					  WHERE	 `id`		=	'".$id."'";
			$database->fire_query($query);
			echo "Uw wachtwoord is succesvol gewijzigd.";
			header("refresh:4;url=activate.php?id=".$id);		
		}
	}
?>