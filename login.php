<?php

require_once('function.php');  // Include the function.php file to access the login function
require_once('session.php');   // Include the session.php file to start the session

// Check if the login form was submitted
if (isset($_POST['submit'])) {

    $login = login($conn, $_POST);  // Call the login function with the form data
    if ($login) {  // If login was successful
        // Set session variables with the user's information
        $_SESSION['id'] = $login['id'];        
        $_SESSION['email'] = $login['email'];

        header("location:index.php");  // Redirect to the index page
        exit();  // Terminate the script to ensure no further code is executed
    } else {
        echo '<script>alert("The user does not exist or the password is incorrect.");</script>';  // Show an error message if login failed
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navbar Section -->
    <!-- <header class="navbar">
        <div class="container">
            <div class="logo">
                <img src="./logo.png" alt="Online Book Store Logo">
                <em>OnLine BookStore</em>
            </div>
            <nav class="links">
                <a href="index.php">Home</a>
                <a href="books.html">Books</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </nav>
        </div>
    </header> -->

    <!-- Login Form --> 
    <section class="login-form">
        <div class="login-container">
        <h2>Login to Your Account</h2>
        
        <form action="" method="post" class="form">
                
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Password:</label>
                <input type="password" name="password" required>

                <button type="submit" name="submit">Login</button>
                <p style="margin-top:4px;">Don't have an account? <a href="signup.php">Sign up here</a>.</p>
        </form>
    </div>
    </section>
    
<!-- letting us login -->
    <!-- <section class="login-form">
        <div class="container">
            <h1>Login to Your Account</h1>
            <form action="" method="post" class="form">
               
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Password:</label>
                <input type="password" name="password" required>

                <button type="submit" name="submit">Login</button>
                <p style="margin-top:4px;">Don't have an account? <a href="signup.php">Sign up here</a>.</p>
            </form>
        </div>
    </section> -->

<!-- New login for -->
<!-- <section class="login-form">
        <div class="login-container">
        <h2>Login to Your Account</h2>
        <form action="" method="post" class="form">
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Password:</label>
                <input type="password" name="password" required>

                <button type="submit" name="submit">Login</button>
                <p style="margin-top:4px;">Don't have an account? <a href="signup.php">Sign up here</a>.</p>
            </form>
    </div>
    </section> -->


    <!-- Footer -->
    <!-- <div class="footer">
        <a href="about.html">About us</a> &rArr;
        <a href="contact.html">Contact us</a>
    </div> -->
</body>

</html>
