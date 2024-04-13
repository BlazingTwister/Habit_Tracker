<?php
// Start the session
session_start();

require_once("../settings/connection.php"); // Include connection file

// Function to check for login status
function check_login(){
    // Check if the session variable is set
    if(!isset($_SESSION["username"])){
        // Not logged in
        return false;
    }
    else{
        // Logged in
        return true;
    }
}

// Function to get the user ID based on the username
function get_user_id($username) {
    global $conn;

    // Query to select the userID based on the username
    $sql = "SELECT userID FROM Users WHERE username = ?";
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();

    // Bind the result variable
    $stmt->bind_result($userID);

    // Fetch the result
    $stmt->fetch();

    // Close the statement
    $stmt->close();

    // Return the user ID
    return $userID;
}
?>