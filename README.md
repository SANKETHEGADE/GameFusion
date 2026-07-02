GameFusion 🎮

An interactive web-based gaming platform where users can explore games, watch trailers and guides, join per-game chat lobbies, and stay updated on esports. Built with PHP, MySQL, JavaScript, and HTML/CSS.

Features


User authentication — Register and login system with session management; pages are protected and redirect to login if not authenticated
Game library — Browse and explore a collection of games through a dynamic game grid
Per-game pages — Each game has its own dedicated page with:

Game banner, title, genre, platform, developer, and release year
Embedded YouTube trailer
Beginner's guide videos
Esports highlights section
Community links (Discord, Telegram)



Real-time chat widget — Every game page has a live chat lobby where players can send messages and see who's online
Esports section — Keeps users informed about competitive gaming trends and highlights
Ad-free experience — Clean, community-focused platform


Tech stack


Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
Icons: Font Awesome


Project structure

FilePurposelogin.phpLogin form — username and password, redirects to home on successregister.phpRegistration form — username, email, password with confirmationserver.phpBackend logic — handles user registration, login, session management, DB connectionindex.phpHome page — session-protected, redirects to login if not authenticatedGameFusion.phpMain games page — shows featured games grid with session-aware nav (Login/Logout/Welcome)game.php / game.htmlIndividual game page — trailer, guides, esports videos, community links, chat widgetscript.jsFrontend logic — game data rendering, chat widget functionality, online statusstyles.cssMain stylesheet — navbar, game grid, chat widget, game page layoutstyle.cssAuth pages stylesheet — login and register form styling

How to run locally

Requirements: PHP, MySQL, Apache (XAMPP or WAMP works fine)

bash# 1. Clone the repo into your web server's root folder
#    e.g. C:/xampp/htdocs/GameFusion

sql-- 2. Open phpMyAdmin → create a database named 'project'
--    Then run this to create the users table:
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  img VARCHAR(255)
);

bash# 3. Start Apache and MySQL in XAMPP

# 4. Open in browser
http://localhost/GameFusion/login.php

User flow


Visit the site → redirected to Login page
New user? Click Sign up → fill in username, email, password → redirected to home
Returning user? Login → lands on the GameFusion home page
Browse games → click any game → opens the game page with trailer, guides, and live chat
Click Logout from the nav → session cleared, redirected to login
