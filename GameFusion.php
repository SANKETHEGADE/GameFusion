<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    exit();
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameFusion | Home</title>
    <link rel="icon" href= "data:image/jpeg;base64,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" alt="GameFusion Logo">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
 <ul class="nav-links">
    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="#"><i class="fas fa-gamepad"></i> Games</a></li>
    <li><a href="#"><i class="fas fa-users"></i> Community</a></li>
    <?php if (isset($_SESSION['username'])) : ?>
        <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        <li><span class="welcome-msg">Welcome <?php echo $_SESSION['username']; ?></span></li>
    <?php else : ?>
        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
    <?php endif ?>
</ul>
    <!-- Main Content -->
    <div class="main-content">
        <h1>Featured Games</h1>
        <div class="games-grid" id="gamesGrid">
            <!-- Games injected via JavaScript -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2025 GameFusion. All Rights Reserved.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-discord"></i> Discord</a>
            <a href="#"><i class="fab fa-telegram"></i> Telegram</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>