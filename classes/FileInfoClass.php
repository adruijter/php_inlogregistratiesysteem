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
			echo nl2br($this->text);
		}
	}
?>