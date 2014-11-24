<?php
	class VoertuigClass
	{
		// Fields
		protected $ikBenEen;
		private $aantalWielen;
		private $geluidsWaarschuwing;
		
		// Properties get en set functies
		//getters
		public function getIkBenEen() { return $this->ikBenEen; }
		public function getAantalWielen() { return $this->aantalWielen; }
		public function getGeluidsWaarschuwing() { return $this->geluidsWaarschuwing; }
		
		//setters
		public function setIkBenEen($value) { $this->ikBenEen = $value; }
		public function setAantalWielen($value) { $this->aantalWielen = $value; }
		public function setGeluidsWaarschuwing($value) { $this->geluidsWaarschuwing = $value; }
		
		public function __construct($ikBenEen, $aantalWielen, $geluidsWaarschuwing)
		{
			$this->ikBenEen = $ikBenEen;
			$this->aantalWielen = $aantalWielen;
			$this->geluidsWaarschuwing = $geluidsWaarschuwing; 
		}		
	}
?>