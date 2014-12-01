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
			openFile();
		}
		
		//Methods
		private function openFile()
		{
			$testFile = fopen("./".$this->text, "r");
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
			echo $text;
		}
	}
?>