<?php
class cmysql
{
	function __construct() {}

	function __destruct() {}
	
	public function conectar()
	{
		$dbase = 'travel';
		$user = 'root';
		$pass = '1234';
		$dsn = "mysql:dbname=".$dbase.";host=localhost";    

		try 
		{
			$link = new PDO( $dsn, $user, $pass );
			return $link;
		} 
		catch (PDOException $e) 
		{
			echo 'Error en conexion: ' . $e->getMessage();
		}   
	}
}
?>