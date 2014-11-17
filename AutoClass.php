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
		public function getMerk() 			{	return $this->merk;	}
		public function getType() 			{	return $this->type;	}
		public function getAantalWielen() 	{	return $this->aantalWielen;	}
		public function getBrandstof() 		{	return $this->brandstof;	}
		public function getKenteken() 		{	return $this->kenteken;	}
		public function getBouwjaar() 		{	return $this->bouwjaar;	}
		
		
		
		// Constructor
		public function __construct($merk, 
									$type, 
									$aantalWielen, 
									$brandstof,
									$kenteken,
									$bouwjaar)
		{
			$this->merk = $merk;
			$this->type = $type;
			$this->aantalWielen = $aantalWielen;
			$this->brandstof = $brandstof;
			$this->kenteken = $kenteken;
			$this->bouwjaar = $bouwjaar;
		}
		
		public function showInfoAuto()
		{
			$text  = "Deze auto is van het merk ".$this->merk."<br>";
			$text .= "Het type is: ".$this->type."<br>";
			$text .= "Deze auto heeft ".$this->aantalWielen." wielen<br>";
			$text .= "Hij rijdt op: ".$this->brandstof."<br>";
			$text .= "Het kenteken is: ".$this->kenteken."<br>";
			$text .= "Deze".$this->merk." kwam voor het eerst in ".$this->bouwjaar." op de markt in Nederland<br>";
			$text .= "++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";
			echo $text;
		}
	}
?>