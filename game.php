<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameFusion | Game</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <img src="assets/logo.png" alt="GameFusion Logo">
            <span>GameFusion</span>
        </div>
        <ul class="nav-links">
            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-gamepad"></i> Games</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Community</a></li>
        </ul>
    </nav>

    <!-- Game Content -->
    <div class="game-page" id="gamePage">
        <div class="game-header">
            <img id="gameBanner" class="square-banner" src="" alt="Game Banner">
            <h1 id="gameTitle">Loading...</h1>
            <p id="gameSubtitle"></p>
        </div>

        <div class="game-content">
            <!-- YouTube Embed -->
            <div class="youtube-embed">
                <h2><i class="fab fa-youtube"></i> Latest Videos</h2>
                <iframe id="gameTrailer" width="100%" height="500" src="" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- After the main trailer -->
            <div class="video-sections">
                <!-- Beginner Guides -->
                <div class="video-section">
                    <h2><i class="fas fa-user-graduate"></i> Beginner's Guides</h2>
                    <div class="video-grid" id="beginnerVideos"></div>
                </div>
                
                <!-- Esports -->
                <div class="video-section">
                    <h2><i class="fas fa-trophy"></i> Esports Highlights</h2>
                    <div class="video-grid" id="esportsVideos"></div>
                </div>
            </div>

            <!-- Community Links -->
            <div class="community-links">
                <h2><i class="fas fa-users"></i> Join the Community</h2>
                <div id="communityLinks"></div>
            </div>

            <!-- Game Details -->
            <div class="game-details">
                <h2><i class="fas fa-info-circle"></i> Game Details</h2>
                <div class="detail-item">
                    <span class="detail-label">Genre:</span>
                    <span id="gameGenre"></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Platforms:</span>
                    <span id="gamePlatforms"></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Release Year:</span>
                    <span id="gameReleaseYear"></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Developer:</span>
                    <span id="gameDeveloper"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2024 GameFusion. All Rights Reserved.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-discord"></i> Discord</a>
            <a href="#"><i class="fab fa-telegram"></i> Telegram</a>
        </div>
    </footer>

    <script src="script.js"></script>

    <!-- Gamer Chat Widget -->
    <div class="game-chat-container">
        <button class="chat-toggle-btn">
            <i class="fas fa-comments"></i>
            <span class="notification-badge">0</span>
        </button>

        <div class="game-chat">
            <div class="chat-header">
                <h3><i class="fas fa-headset"></i> <span id="chatGameTitle">Game Lobby</span></h3>
                <div class="online-status">
                    <span class="online-dot"></span>
                    <span class="online-count">0</span> online
                </div>
                <button class="close-chat"><i class="fas fa-times"></i></button>
            </div>
            
            <div class="chat-messages" id="chatMessages">
                <div class="system-message">
                    <i class="fas fa-robot"></i> Welcome to the game chat!
                </div>
            </div>
            
            <div class="chat-input-container">
                <input type="text" id="chatInput" placeholder="Type your message..." maxlength="150">
                <button id="sendMessage" class="send-btn">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Game List -->
    <div id="gameList"></div>

    <script>
        fetch('/api/games')
            .then(res => res.json())
            .then(games => {
                const list = document.getElementById('gameList');
                games.forEach(game => {
                    const card = document.createElement('div');
                    card.innerHTML = `
                        <h2>${game.title}</h2>
                        <img src="${game.image}" width="200">
                        <p>${game.description}</p>
                    `;
                    list.appendChild(card);
                });
            });
    </script>
</body>
</html>

  