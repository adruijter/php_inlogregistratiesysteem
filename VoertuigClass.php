<?php
	class VoertuigClass
	{
		// Fields
		protected $ikBenEen;
		protected $aantalWielen;
		protected $geluidsWaarschuwing;
		
		// Properties get en set functies
		//getters
		public function getIkBenEen() { return $this->ikBenEen; }
		public function getAantalWielen() { return $this->aantalWielen; }
		public function getGeluidsWaarschuwing() { return $this->geluidsWaarschuwing; }
		
		//setters		
		public function setAantalWielen($value) { $this->aantalWielen = $value; }
		public function setGeluidsWaarschuwing($value) { $this->geluidsWaarschuwing = $value; }
		public function setIkBenEen($value) { $this->ikBenEen = $value; }
		
		public function __construct($ikBenEen, $aantalWielen, $geluidsWaarschuwing)
		{
			$this->ikBenEen = $ikBenEen;
			$this->aantalWielen = $aantalWielen;
			$this->geluidsWaarschuwing = $geluidsWaarschuwing; 
		}

		public function Info()
		{
			$tekst = "Ik ben een: ".$this->ikBenEen."<br>";
			$tekst .= "Ik waarschuw mijn omgeving door het geluid: ".$this->geluidsWaarschuwing."<br>";
			$tekst .= "Ik heb maar liefst: ".$this->aantalWielen." wielen onder mij<br>";
			echo $tekst;		
		}
	}
?>