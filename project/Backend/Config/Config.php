<?php
/**
*@file Config.php
*@class config
*@author Michael
*@brief allows us to establish a connection to the database and makes use of a singleton to do so
*/

include "../../../Env.php";//THIS AN IMPORT FOR ENV VARIABLES, PLEASE UPDATE ACCORDINGLY

/**
*@brief allows us to establish a connection to the database and makes use of a singleton to do so
*/
class config{
    /**
    *@brief creates and returns a singleton/instance which allows us to connect to the database(PLEASE DON'T MODIFY THIS FUNCTION)
    *@param $none
    *@return PDO
    */
    public function connectToDataBase(){
        try{
            if($this->database == null){
                $environmentVar = new Env();
                $host = $environmentVar->getHostName();
                $dbname = $environmentVar->getDBName();
                $username = $environmentVar->getUserName();
                $password = $environmentVar->getPassword();
                $this->database = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
            }
            return $this->database;
        }
        catch(PDOException $e){echo "FATAL ERROR[1]: ". $e->getMessage() . "<br/>"; die();}
    }
    /**
    *@brief instance which has the connection to the database
    */
    private $database = null;
}