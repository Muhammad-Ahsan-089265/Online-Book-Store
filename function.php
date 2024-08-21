<?php
require_once("connection.php");  // Include the connection.php file to use the $conn variable

// Function to handle user signup
function signup($conn, $data)
{
    // Extract data from the form submission
    $name = $data['name'];        // User's name
    $email = $data['email'];      // User's email
    $password = $data['password']; // User's password (should be hashed in practice)

    // Prepare the SQL query to insert a new user
    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?,?,?)";

    // Prepare the SQL statement to prevent SQL injection
    $signup = $conn->prepare($sql);
    $signup->bind_param("sss", $name, $email, $password);  // Bind the parameters to the SQL query
    $signup->execute();  // Execute the prepared statement

    // Check if the insertion was successful
    if ($signup->affected_rows > 0) {  // If rows were affected
        return true;  // Return true if the signup was successful
    } else {
        return false;  // Return false if the signup failed
    }
}

// Function to handle user login
function login($conn, $data)
{
    $email = $data['email'];  // Extract the email from the form submission

    // Prepare the SQL query to select the user by email
    $sql = "SELECT `id`, `email`, `password` FROM `users` WHERE `email` = ?";
    $stmt = $conn->prepare($sql);  // Prepare the SQL statement
    $stmt->bind_param("s", $email);  // Bind the email parameter to the SQL query
    $stmt->execute();  // Execute the prepared statement
    $result = $stmt->get_result();  // Get the result of the query

    // Check if a user was found with the provided email
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();  // Fetch the user data

        // Verify the password (Note: In practice, use password_verify() with hashed passwords)
        if ($row['password']) {
            return $row; // Return user data if the password is correct
        } else {
            return false; // Return false if the password is incorrect
        }
    } else {
        return false; // Return false if the email was not found
    }
}
?>
