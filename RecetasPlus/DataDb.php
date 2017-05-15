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
			$username= "root";
			return $username;    
		}
		public function getDB(){
			$db = "hobby";
			return $db;    
		}
		public function getPass(){
			$pass = "";
			return $pass;    
		}
	}
?>