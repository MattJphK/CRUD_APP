
<?php include "templates/header.php"; ?>

<h2>Add a user</h2>
    <form method="POST">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" required><br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required><br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age"><br>
        <label for="location">Location</label>
        <input type="text" name="location" id="location"><br>
        <input type="submit" value="Submit">
    </form>

    <a href="index.php">Back to Home</a>
<?php include "templates/footer.php"; ?>
