<?php

require_once('session.php');   // Include the session.php file to start the session
require_once('function.php');  // Include the function.php file for any needed functions
require_once('header.php');
// Check if the user is logged in
if (!isset($_SESSION["id"])) {
    header("location:login.php");  // Redirect to the login page if not logged in
}
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store - Home</title>
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <meta name="description" content="Online book store with a wide selection of coding and academic books, including C++, DBMS, DSA, and more.">
    <link rel="stylesheet" href="styles.css">
</head> -->

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
                <a href="books.php">Books</a>
                <a href="favorite.php">Favourite</a>
                <a href="about.php">About</a>
                <a href="logout.php">Log out</a>
            </nav>
        </div>
    </header> --> 

    <!-- Main Content -->
    <div class="main">
        <h1>Welcome to the Online Book Store</h1>

        <!-- Icon Section -->
        <div class="icon-section">
            <div class="icon-container">
                <a href="books.php">
                    <img src="books.png" alt="Books">
                    <p>Books</p>
                </a>
                <a href="favorite.php">
                    <img src="favourite.png" alt="Favourite books"> 
                    <p>Favourite Books</p>
                </a>
                <a href="about.php">
                    <img src="About.png" alt="About Us"> 
                    <p>About Us</p>
                </a>
            </div>
        </div>

        <!-- <section class="motive">
                <article>
                    A book is a magical portal to another dimension, a place where the imagination can soar, and the mind can explore the infinite possibilities of knowledge and adventure. Within the pages of a book lies the power to transport us to distant lands, introduce us to extraordinary characters, and illuminate the vast tapestry of human experience.
                </article>
        </section> -->

    </div>

    <?php
    require_once("footer.php")
    ?>

 
</body>

</html>
