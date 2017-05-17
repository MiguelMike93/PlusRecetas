<?php
	/*
	$_HOST = "sql313.epizy.com";	
	$_USERNAME= "epiz_198306173";
	$_DB = "epiz_19830617_recetasPlusdb";
	$_PASS = "miguel1993";
	*/
	class DataDb{
		
		private $host;	
		private $username;
		private $db;
		private $pass;
		public function getHost(){
			$host = "localhost";
			return $host;    
		}
		public function getUsername(){
			$username= "epiz_19830617";
			return $username;    
		}
		public function getDB(){
			$db = "epiz_19830617_recetasPlusdb";
			return $db;    
		}
		public function getPass(){
			$pass = "";
			return $pass;    
		}
	}
?>
