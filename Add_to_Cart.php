<?php
require_once('header.php');
?>
<br><br><br>
<body>
    <div class="container_a">
        <h2>Add to Cart</h2>
        <form method="POST" action="add_to_cart.php" class="add-to-cart-form">
            <label for="book_name">Book Name:</label>
            <select name="book_name" id="book_name" required>
                <option value="1">Deitel and Deitel C++</option>
                <option value="2">Linear Algebra</option>
                <option value="3">Carlos M. Coronel Database</option>
                <option value="4">Data Structures and Algorithm</option>
                <option value="5">Modeling and Simulation</option>
                <option value="6">Software Engineering</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" required>

            <a href="buy.php" class="button-link">
                <button type="button" class="submit-button">Add to Cart</button>
            </a>

        </form>
    </div>
</body>
<br><br><br>

<?php
require_once('footer.php');
?>

</html>

