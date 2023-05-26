<?php
/**
*@file Config.php
*@class config
*@author Michael
*@brief allows us to establish a connection to the database and makes use of a singleton to do so
*/

/**
*@brief allows us to establish a connection to the database and makes use of a singleton to do so
*/
class config{
    /**
    *@brief creates and returns a singleton/instance which allows us to connect to the database(PLEASE DON'T MODIFY THIS FUNCTION)
    *@param none
    *@return PDO
    */
    public function connectToDataBase(){
        try{
            if($this->database == null)
                $this->database = new PDO("mysql:host=$this->hostName;dbname=$this->dbName;", $this->userName, $this->passWord);

            return $this->database;
        }
        catch(PDOException $e){echo "FATAL ERROR[1]: ". $e->getMessage() . "<br/>"; die();}
    }

    /**
    *@brief hostname of the website hosting the database
    */
    private $hostName = "wheatley.cs.up.ac.za";
    /**
    *@brief username of the person who owns the database on the host website
    */
    private $userName = "<USERNAME GOES HERE>";
    /**
    *@brief password of the person who owns the database on the host website
    */
    private $passWord = "<PASSWORD GOES HERE>";
    /**
    *@brief name of the database on the host website which we retrieve data from
    */
    private $dbName = "<DB NAME GOES HERE";
    /**
    *@brief instance which has the connection to the database
    */
    private $database = null;
}