<?php
require_once('header.php');
?>
<link rel="stylesheet" href="styles.css">
<body>
    <div class="container_b">
        <div class="form-box">
            <h1 class="title">Proceed Only If You Have a Bank Account</h1>
            <form method="POST" action="added.php">
                <label for="account_number">Account Number:</label>
                <input type="text" id="account_number" name="account_number" placeholder="14-24 digits code" required>

                <label for="reference">Paste Reference (Optional):</label>
                <input type="url" id="reference" name="reference" placeholder="Reference URL">

                <fieldset class="radio-group">
                    <legend>Select Option:</legend>
                    <label>
                        <input type="radio" name="option" value="shipping" id="shipping" required>
                        Shipping
                    </label>
                    <label>
                        <input type="radio" name="option" value="book_now" id="book_now">
                        Book Now
                    </label>
                </fieldset>

                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </div>
    
    <?php
    require_once('footer.php');
    ?>
</body>
</html>
