<?php
require_once 'config.php';
require_once 'includes/header.php'; 

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<h1>Welcome to your Dashboard, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
<p>This is your central hub for managing inventory.</p>
<p>From here you can:</p>
<ul>
    <li><a href="items.php">Manage Items</a></li>
    <li><a href="categories.php">Manage Categories</a></li>
    <li>View Reports (coming soon)</li>
</ul>
<p>
    <a href="logout.php" class="btn btn-primary">Sign Out</a>
</p>

<?php
mysqli_close($conn); // Close the database connection
require_once 'includes/footer.php';
?>