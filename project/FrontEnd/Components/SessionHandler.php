<?php
    session_start();

    $username = file_get_contents('php://input');

    // Set session variables
    $_SESSION['username'] = $username;
    
    // Return a response indicating success
    $response = ['status'=> 'success', 'username'=> $_SESSION['username']];
    echo json_encode($response);
