<?php
	session_start();
	class SessionClass
	{
		//Fields
		private $id;
		private $email;
		private $userrole;
		
		//Properties
		public function getUserrole() { return $this->userrole; }
	
		//Constructor
		public function ___construct() {}
	
		public function login($loginObject)
		{
			// De velden $id, $email, $userrole een waarde geven.
			//var_dump($loginObject);exit();
			$this->id = $_SESSION['id'] = $loginObject->getId();
			$this->email = $_SESSION['email'] = $loginObject->getEmail();
			$this->userrole = $_SESSION['userrole'] = $loginObject->getUserrole();
		}	
	}
	
	$session = new SessionClass();
?>