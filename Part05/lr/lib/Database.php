<?php
	class Database
 {
 	private $hostdb = "localhost";
 	private $userdb = "root";
 	private $passdb = "";
 	private $namedb = "db_lr";
 	public $pdo; 	
 	function __construct()
 	{
 		if (isset($this->pdo)) {
 			try {
 				$link = new PDO();
 			} catch (Exception $e) {
 				
 			}
 		}
 	}
 }
?>