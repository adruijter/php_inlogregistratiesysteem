<?php
	class CarClass
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
		
		//setters
		public function setMerk($merk) { $this->merk = $merk; }
		public function setType($type) { $this->type = $type; }
		public function setAantalWielen($aantalWielen) { $this->aantalWielen = $aantalWielen; }
		public function setBrandstof($brandstof) { $this->brandstof = $brandstof; }
		public function setKenteken($kenteken) { $this->kenteken = $kenteken; }
		public function setBouwjaar($bouwjaar) { $this->bouwjaar = $bouwjaar; }
	}
?>