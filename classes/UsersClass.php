<?php
	require_once('MySqlDatabaseClass.php');
	
	class UsersClass
	{
		//Fields
		private $id;
		private $firstname;
		private $infix;
		private $lastname;
		
		//Properties
		//getters
		public function getId() { return $this->id; }
		public function getFirstname() { return $this->firstname; }
		public function getInfix() { return $this->infix; }
		public function getLastname() { return $this->lastname; }
		//setters
		public function setId($value) { $this->id = $value; }
		public function setFirstname($value) { $this->firstname = $value; }
		public function setInfix() { $this->infix = $value; }
		public function setLastname() { $this->lastname = $value; }
		
		
		//Constuctor
		public function __construct() {}
		
		//Methods	
		public static function insert_into_database($id)
		{
			echo $id; exit();
			//Hier moet code komen voor het contact maken met de server
			
		}
		
}
?>