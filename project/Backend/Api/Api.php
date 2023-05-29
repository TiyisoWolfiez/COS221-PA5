<?php
/**
*@file Config.php
*@class config
*@authors Michael, Add your name here if you write code in this file
*@brief allows us to talk to the database
*/
include "../Config/Config.php";

/**
*@brief request type that the user made when a call was made to this api
*/
enum REQUESTYPE: string
{
    case REGISTER = 'REGISTER';
    case LOGIN = 'LOGIN';
    case GET_WINERIES = 'GET_WINERIES';
    case GET_WINE = 'GET_WINE';
    /**Add more cases */
}

/**
*@brief error types for a more structured way of defining and sending errors back to the client
*/
enum ERRORTYPES: int
{
    case INVALIDEMAIL = 1;//Invalid user email
    case INVALIDPASSWORD = 2;//Invalid user password
    case NULLUSER = 3;//No user exists in the database with the given email
    case WRONGPASSWORD = 3;//Wrong password
    case USERNAMETAKEN = 5;//Username is unavailable
    /**Add more cases */
}




/**
*@brief allows us to talk to the database
*/
class Api extends config{

    /**
    *@brief creates a static instance of this class and returns it (PLEASE DON'T MODIFY UNLESS ABSOLUTELY NECESSARY)
    *@param none
    *@return Api
    */
    public static function instance(){
        static $Instance = null;
        if($Instance === null)$Instance = new api();
        return $Instance;
    }

    /**
    *@brief handles the logging in of the user to the backend by checking if they exist on the backend, and checking that their password matches
    *@param UserEmail carries the users email address
    *@param UserPassword carries the users password
    *@return void
    */
    public function loginUser($UserEmail, $UserPassword){
        if(!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)){
            return array("status" => "error","data" => $this->createError(ERRORTYPES::INVALIDEMAIL));
        }
        if(!preg_match("/^(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*?><.,;:]{8,}$/", $UserPassword)){
            return array("status" => "error","data" => $this->createError(ERRORTYPES::INVALIDPASSWORD));
        }

        //continued

        $conn = $this->connectToDatabase();
        $stmt = $conn->prepare('SELECT Username FROM USER WHERE Username = ? AND Password = ?');
        
        //hash password first using algorithm (TBD) before adding as param for stmt execution
        $success = $stmt->execute(array($UserEmail, $UserPassword));

        if($success && $stmt->rowCount() != 0){
            return $this->constructResponseObject("", "success");
        }
        else{
            return $this->constructResponseObject($this->createError(ERRORTYPES::NULLUSER), "error");
        }
    }

    public function registerUser($Username, $email, $pswrd){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return array("status" => "error","data" => $this->createError(ERRORTYPES::INVALIDEMAIL));
        }
        if(!preg_match("/^(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*?><.,;:]{8,}$/", $pswrd)){
            return array("status" => "error","data" => $this->createError(ERRORTYPES::INVALIDPASSWORD));
        }

        $conn = $this->connectToDatabase();
        $stmt = $conn->prepare("SELECT UserID WHERE Username = ?");
        $success = $stmt->execute($Username);

        if($success && $stmt->rowCount() == 0){
            $stmt = $conn->prepare(/**INSERT query*/);
            $success = $stmt->execute($Username, $email, $pswrd);

            if($success){
                return $this->constructResponseObject("", "success");
            }
        }
        else{
            return array("status" => "error","data" => $this->createError(ERRORTYPES::USERNAMETAKEN));
        }
    }

    /**
    *@brief Creates an error based on the passed in parameter error type
    *@param errortype the error type
    *@return string
    */
    private function createError($errortype){
        if($errortype == ERRORTYPES::INVALIDEMAIL)return "Invalid email";
        else if($errortype == ERRORTYPES::INVALIDPASSWORD)return "Invalid password";
        else if($errortype == ERRORTYPES::NULLUSER)return "No user exists with this email address";
        else if($errortype == ERRORTYPES::WRONGPASSWORD)return "The password for this account is wrong";
        else if($errortype == ERRORTYPES::USERNAMETAKEN)return "Username is unavailable";
    }
}

/**
*@brief creates an instance of the api
*/
$apiconfig = api::instance();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $json = file_get_contents('php://input');
    $USERREQUEST = json_decode($json);

    if($USERREQUEST->type == REQUESTYPE::REGISTER){
        $apiconfig->registerUser($data->username, $data->email, $data->password);
    }
    else if($USERREQUEST->type == REQUESTYPE::LOGIN){
        $res = $apiconfig->loginUser($data->email, $data->password);
        echo $res;
    }
    else{
        //add more else if for other types
    }
    
}