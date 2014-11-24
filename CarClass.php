<?php
	require_once("./VoertuigClass.php");


	class CarClass extends VoertuigClass
	{
		//Fields
		private $merk;
		private $type;
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
		
		//setters
		public function setMerk($merk) { $this->merk = $merk; }
		public function setType($type) { $this->type = $type; }
		public function setAantalWielen($aantalWielen) { $this->aantalWielen = $aantalWielen; }
		public function setBrandstof($brandstof) { $this->brandstof = $brandstof; }
		public function setKenteken($kenteken) { $this->kenteken = $kenteken; }
		public function setBouwjaar($bouwjaar) { $this->bouwjaar = $bouwjaar; }
		
		public function __construct($merk, $type, $brandstof, $kenteken,
										$bouwjaar, $ikBenEen, $aantalWielen,
											$geluidsWaarschuwing)
		{
			parent::__construct($ikBenEen, $aantalWielen, $geluidsWaarschuwing);
			$this->merk = $merk;
			$this->type = $type;
			$this->brandstof = $brandstof;
			$this->kenteken = $kenteken;
			$this->bouwjaar = $bouwjaar;
		}
		
		public function CarInfo()
		{
			echo "Dit object is een ".$this->ikBenEen." en van het merk ".$this->merk;		
		}
	}
?>