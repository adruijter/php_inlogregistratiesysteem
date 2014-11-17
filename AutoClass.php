<?php
	class AutoClass
	{
		//Fields
		private $merk;
		private $type;
		private $aantalWielen;
		private $brandstof;
		private $kenteken;
		private $bouwjaar;
		
		// Properties worden get en set functies
		public function getMerk() {	return $this->merk;	}
		
		
		// Constructor
		public function __construct($merk)
		{
			$this->merk = $merk;
		}		
	}
?>