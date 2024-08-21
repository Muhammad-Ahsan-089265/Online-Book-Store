<?php
require_once('function.php');  // Include the function.php file to access the signup function

// Check if the signup form was submitted
if (isset($_POST['submit'])) {
    $signup = signup($conn, $_POST);  // Call the signup function with the form data
    if ($signup) {  // If signup was successful
        header("location:login.php");  // Redirect to the login page
    }
}
?>



<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" href="styles.css">
<!-- <link rel="shortcut icon" href="./logo.png" type="image/x-icon"> -->




<body>
    <h1 class="signup-heading">Create Your Account</h1>
    <section class="signup-form">
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="name" class="input-field" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="input-field" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="input-field" required>
            </div>
            <button type="submit" name="submit" class="submit-button">Submit</button>
            <p class="login-link">Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </section>
    
    <!-- <br><br><br> -->
    <!-- Footer -->
    <!-- <div class="footer">
        <a href="about.html">About us</a> &rArr;
        <a href="contact.html">Contact us</a>
    </div> -->
</body>
</html>