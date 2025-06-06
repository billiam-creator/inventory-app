<?php
require_once 'config.php'; // Include database connection
require_once 'includes/header.php'; // Include header (this also starts the session)
?>

<h1>Welcome to the Inventory Management System</h1>
<p>This application helps you manage your inventory efficiently.</p>

<?php
// Check if the user is logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo "<p>You are currently logged in as <b>" . htmlspecialchars($_SESSION["username"]) . "</b>.</p>";
    echo "<p><a href='dashboard.php' class='btn'>Go to Dashboard</a></p>";
} else {
    echo "<p>Please <a href='login.php'>login</a> or <a href='register.php'>register</a> to continue.</p>";
}
?>

<?php
mysqli_close($conn); // Close the database connection
require_once 'includes/footer.php'; 
?>