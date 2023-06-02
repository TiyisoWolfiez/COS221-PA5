<?php
//This may be a crude implementation, but I will update it appropriately when/if the session handler demands more complexity
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_SESSION['username'])){
        echo $_SESSION['username'];
    }
    else{
        $username = file_get_contents('php://input');

        // Set session variables
        $_SESSION['username'] = $username;
        
        // Return a response indicating success
        $response = ['status'=> 'success', 'username'=> $_SESSION['username']];
        echo json_encode($response);
    }