<?php

/* This is system library for ElevenDots 
  Library for GNU PUBLIC LICENSE v2.0
  
*/

session_start();
  
ob_start();

  class Database {
  
    private static $db;
  
    public function __construct() {
    
      self::$db = new PDO(DB_DRIVER,":dbname=".DB_NAME.";host=".DB_HOST,DB_USER,DB_PASS);    
      
      try {
      
            self::$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXPETION);
            self::$db->setFetchMode(PDO::FETC_ASSOC);
      }
      
      catch(PDOExcpetion $e) {
        
          die($e->getMessage());
          exit(1);
      }
      
    }
  
  public static function connect_db() {
  
      if(! self::$db) {
      
        new Database();
        
      }
    
    return self::$db;
    
  }
  
  }
  
  class System {
  
    public static function DateOfDay() {
    
        $date_of_day = date("dd/mm/Y");
        
        echo  $date_of_day;
    
    }
    
    public static function ReturnYear() {
      
        $year_date = date("Y");
        
        echo $year_date;
        
    }
    
    public static function ReturnDay() {
      
        $day_date = date("d");
        
        echo $day_date;
        
    
    }
    
    public static InsertRow($table) {}
    
    
  
  }

?>
