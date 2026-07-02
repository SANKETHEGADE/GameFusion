<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GameFusion - Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Use styles.css if needed -->
</head>
<body>
    <div class="container">
        <h1>Welcome to GameFusion, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

        <p>You are now logged in.</p>

        <a href="game.html" class="btn">Go to Game Page</a> |
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
