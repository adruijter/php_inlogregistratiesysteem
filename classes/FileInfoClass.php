<?php
	class FileInfoClass
	{
		//Fields
		private $filePath;
		private $text;
		
		//Properties
		
		//Constructor
		public function __construct($filePath)
		{
			$this->filePath = $filePath;
			$this->openFile();
		}
		
		//Methods
		private function openFile()
		{
			$testFile = fopen("./".$this->filePath, "r");
			$text = fread($testFile, filesize("./".$this->filePath));	
			if (!$testFile)
			{
				return "Het openen van het bestand is niet gelukt";
			}
			else
			{
				$this->text = $text;
			}
		}
		
		public function Info()
		{
			$output = "<h3>Het bestand ".$this->filePath." bevat de volgende tekst</h3>";
			$output .= nl2br($this->text);
			$output .= "<br>+++++++++++++++++++++++++++++<br>";
			$output .= "Het aantal letters in deze tekst: ".strlen($this->text)."<br>";
			$output .= "Het aantal woorden in deze tekst: ".str_word_count($this->text)."<br>";
			$output .= "Het aantal zinnen in deze tekst: ".substr_count($this->text, ".")."<br>";
			$output .= "Het aantal punten in deze tekst: ".substr_count($this->text, ".")."<br>";
			echo $output;
		}
	}
?>