<?php
	require_once("./VoertuigClass.php");
	require_once("./iInfo.php");

	class AmfibiewagenClass extends VoertuigClass implements iInfo
	{
		//Fields
		private $kleur;
		private $aantalZitplaatsen;
		private $diepgang;
		private $actieRadius;
		private $laadVermogen;
		
		//Properties
		public function getKleur() { return $this->kleur; }
		public function getAantalZitplaatsen() { return $this->aantalZitplaatsen; }
		public function getDiepgang() { return $this->diepgang; }
		public function getActieRadius() { return $this->actieRadius; }
		public function getLaadVermogen() { return $this->laadVermogen; }
		
		
		public function setKleur($value) { $this->kleur = $value; }
		public function setAantalZitplaatsen($value) { $this->aantalZitplaatsen = $value; }
		public function setDiepgang($value) { $this->diepgang = $value; }
		public function setActieRadius($value) { $this->actieRadius = $value; }
		public function setLaadVermogen($value) { $this->laadVermogen = $value; }
		
		//Constructor
		public function __construct($ikBenEen, $aantalWielen, $geluidsWaarschuwing,$kleur, $aantalZitplaatsen, $diepgang, $actieRadius, $laadVermogen)
		{
			parent::__construct($ikBenEen, $aantalWielen, $geluidsWaarschuwing);			
			$this->kleur = $kleur;
			$this->aantalZitplaatsen = $aantalZitplaatsen;
			$this->diepgang = $diepgang;
			$this->actieRadius = $actieRadius;
			$this->laadVermogen = $laadVermogen;
		}
		
		//Methods
		public function Info()
		{
			parent::Info();
			$tekst = "Het aantal zitplaatsen is: ".$this->aantalZitplaatsen."<br>";
			$tekst .= "De diepgang is: ".$this->diepgang." meter<br>";
			$tekst .= "De kleur is: ".$this->kleur."<br>";
			$tekst .= "De actieRadius is: ".$this->actieRadius." km<br>";
			$tekst .= "Het laadvermogen is: ".$this->laadVermogen." kg<br>";
			echo $tekst;		
		}
	}
?>




















