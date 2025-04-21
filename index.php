<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameFusion - Ultimate Gaming Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6c5ce7;
            --secondary: #a29bfe;
            --accent: #fd79a8;
            --dark: #2d3436;
            --light: #f5f6fa;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1e1e2f, #2d2d44);
            color: white;
            min-height: 100vh;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            background: rgba(45, 52, 54, 0.8);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            z-index: 100;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo h1 {
            color: var(--accent);
            font-size: 1.8rem;
            text-shadow: 0 0 10px rgba(253, 121, 168, 0.5);
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        .auth-buttons .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-left: 15px;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(253, 121, 168, 0.4);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--secondary);
            border: 1px solid var(--primary);
        }
        
        .btn-secondary:hover {
            background: rgba(108, 92, 231, 0.1);
        }
        
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            max-width: 600px;
            z-index: 2;
        }
        
        .hero h2 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: var(--secondary);
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
        }
        
        .hero-image {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            width: 50%;
            max-width: 700px;
            z-index: 1;
            opacity: 0.8;
        }
        
        .games-section {
            padding: 100px 5%;
            background: rgba(45, 52, 54, 0.5);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 15px;
        }
        
        .games-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .game-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
            border: 1px solid var(--primary);
        }
        
        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(108, 92, 231, 0.3);
        }
        
        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .game-info {
            padding: 20px;
        }
        
        .game-info h3 {
            margin-bottom: 10px;
            color: white;
        }
        
        .game-info p {
            color: var(--secondary);
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .game-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .tag {
            background: rgba(108, 92, 231, 0.2);
            color: var(--secondary);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        
        footer {
            background: rgba(45, 52, 54, 0.8);
            padding: 50px 5%;
            text-align: center;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-links a {
            color: var(--secondary);
            text-decoration: none;
        }
        
        .footer-links a:hover {
            color: var(--accent);
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
        }
        
        .copyright {
            color: var(--secondary);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <h1>GameFusion</h1>
        </div>
        
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Games</a>
            <a href="#">Tournaments</a>
            <a href="#">Community</a>
            <a href="#">About</a>
        </div>
        
        <div class="auth-buttons">
            <a href="login2.html" class="btn btn-secondary">Login</a>
            <a href="register.html" class="btn btn-primary">Register</a>
        </div>
    </nav>
    
    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to GameFusion</h2>
            <p>Join millions of players in the ultimate gaming experience. Compete, connect, and conquer in our vast collection of games.</p>
            <div class="hero-buttons">
                <a href="register.html" class="btn btn-primary">Get Started</a>
                <a href="#" class="btn btn-secondary">Explore Games</a>
            </div>
        </div>
        
        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Gaming" class="hero-image">
    </section>
    
    <section class="games-section">
        <div class="section-title">
            <h2>Featured Games</h2>
            <p>Discover our most popular titles</p>
        </div>
        
        <div class="games-grid">
            <div class="game-card">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Game 1">
                <div class="game-info">
                    <h3>Battle Royale Legends</h3>
                    <p>Join the ultimate battle with 100 players in this action-packed shooter.</p>
                    <div class="game-tags">
                        <span class="tag">Action</span>
                        <span class="tag">Multiplayer</span>
                        <span class="tag">FPS</span>
                    </div>
                    <a href="#" class="btn btn-primary">Play Now</a>
                </div>
            </div>
            
            <div class="game-card">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Game 2">
                <div class="game-info">
                    <h3>Fantasy Quest</h3>
                    <p>Embark on an epic adventure in this open-world RPG.</p>
                    <div class="game-tags">
                        <span class="tag">RPG</span>
                        <span class="tag">Adventure</span>
                        <span class="tag">Open World</span>
                    </div>
                    <a href="#" class="btn btn-primary">Play Now</a>
                </div>
            </div>
            
            <div class="game-card">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Game 3">
                <div class="game-info">
                    <h3>Racing Extreme</h3>
                    <p>Experience the thrill of high-speed racing with realistic physics.</p>
                    <div class="game-tags">
                        <span class="tag">Racing</span>
                        <span class="tag">Sports</span>
                        <span class="tag">Simulation</span>
                    </div>
                    <a href="#" class="btn btn-primary">Play Now</a>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">Games</a>
            <a href="#">Tournaments</a>
            <a href="#">Community</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
        
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-discord"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        
        <p class="copyright">© 2023 GameFusion. All rights reserved.</p>
    </footer>
</body>
</html>