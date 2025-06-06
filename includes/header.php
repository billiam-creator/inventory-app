<?php
// Start session (needed for user authentication later)
// Check if session is already started before starting
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    <link rel="stylesheet" href="includes/css/style.css"> </head>
<body>
    <header>
        <nav>
            <div class="container">
                <a href="index.php" class="logo">Inventory App</a>
                <ul>
                    <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="items.php">Items</a></li>
                        <li><a href="categories.php">Categories</a></li>
                        <li><a href="logout.php">Logout (<?php echo htmlspecialchars($_SESSION["username"]); ?>)</a></li>
                    <?php else: ?>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">

    </main>
  
    <script src="js/script.js"></script> </body>
</html>