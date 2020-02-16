<?php
class Database 
{
	// these are not the real passwords
	// for real passwords, see file in ../database subdirectory
	private static $dbName = 'id12264325_djk' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'id12264325_djkeiffe';
	private static $dbUserPassword = 'alf264';
	
	private static $cont  = null;
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	public static function connect()
	{
	   // One connection through whole application
       if ( null == self::$cont )
       {      
        try 
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$cont;
	}
	
	public static function disconnect()
	{
		self::$cont = null;
	}
}
?>