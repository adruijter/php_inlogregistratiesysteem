<?php
	class WordClass
	{
		//Fields
		private $text;
		private $fileName;
		
		//Properties
		
		//Constructor
		public function __construct($fileName)
		{
			$this->fileName = $fileName;
		}
		
		
		private function openFile()
		{
			$testFile = fopen("./".$this->text, "r");
			$text = fread($testFile, filesize("./".$this->text));
			if (!$testFile)
			{
				return "Het openen van het bestand is niet gelukt";
			}
			else
			{
				$this->text = $text;
			}
		}
		
		private function countWords()
		{
			return str_word_count($this->text);
		}
		
		
		//Methods
		public function Info()
		{
			echo "Het aantal woorden is: ".$this->countWords();
		}
	}

?>