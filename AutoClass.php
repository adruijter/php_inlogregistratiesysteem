<?php
	class AutoClass
	{
		//Fields
		private static $aantalObjectenAutoClass = 0;
		private $merk;
		private $type;
		private $aantalWielen;
		private $brandstof;
		private static $kenteken;
		private $bouwjaar;
		
		// Properties worden get en set functies
		public function getMerk() 			{	return $this->merk;	}
		public function getType() 			{	return $this->type;	}
		public function getAantalWielen() 	{	return $this->aantalWielen;	}
		public function getBrandstof() 		{	return $this->brandstof;	}
		public static function getKenteken(){	return self::$kenteken;	}
		public function getBouwjaar() 		{	return $this->bouwjaar;	}
		
		// Property voor een static field
		public static function AantalObjectenAutoClass()
		{
			return self::$aantalObjectenAutoClass;
		}
		
		
		
		// Constructor
		public function __construct($merk, 
									$type, 
									$aantalWielen, 
									$brandstof,
									$kenteken,
									$bouwjaar)
		{
			self::$aantalObjectenAutoClass += 1;
			$this->merk = $merk;
			$this->type = $type;
			$this->aantalWielen = $aantalWielen;
			$this->brandstof = $brandstof;
			self::$kenteken = $kenteken;
			$this->bouwjaar = $bouwjaar;
		}
		
		public function __destruct()
		{
			self::$aantalObjectenAutoClass -= 1;
		}
		
		public function showInfoAuto()
		{
			$text  = "Deze auto is van het merk ".$this->merk."<br>";
			$text .= "Het type is: ".$this->type."<br>";
			$text .= "Deze auto heeft ".$this->aantalWielen." wielen<br>";
			$text .= "Hij rijdt op: ".$this->brandstof."<br>";
			$text .= "Het kenteken is: ".self::$kenteken."<br>";
			$text .= "Deze".$this->merk." kwam voor het eerst in ".$this->bouwjaar." op de markt in Nederland<br>";
			$text .= "Het aantal gemaakte objecten van deze class is: ".self::$aantalObjectenAutoClass."<br>";
			$text .= "++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";
			echo $text;
		}
		
		public static function ShowAantalGemaakteObjectenAutoClass()
		{
			echo "Het aantal gemaakte objecten van de AutoClass class bedraagt: ".self::$aantalObjectenAutoClass;
		}
	}
?>