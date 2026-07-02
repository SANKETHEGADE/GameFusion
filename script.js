// Game Database
const games = [
  {
      id: "gta5",
      title: "Grand Theft Auto V",
      subtitle: "Open World | Rockstar Games",
      banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5w2zDMe8VZsjvPp1LqzetFGaYcNVvZFZKHw&s",
      thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5w2zDMe8VZsjvPp1LqzetFGaYcNVvZFZKHw&s",
      trailer: "https://www.youtube.com/embed/QkkoHAzjnUs",
      beginnerVideos: [
        "https://www.youtube.com/embed/mzKdyhSzv_k?si=1F6wFnVbJtwKp6qH",
        "https://www.youtube.com/embed/5Jb3E1Z4Mss?si=cQIErBfNE3Y2jcgO"
      ],
      esportsVideos: [
        "https://www.youtube.com/embed/7p6ydvLgJ5E",
        "https://www.youtube.com/embed/0w0uVq3cX64"
      ],
      discord: "https://discord.gg/gtav",
      telegram: "https://t.me/gtav_official",
      rating: 4.9,
      platforms: ["PC", "PlayStation", "Xbox"],
      releaseYear: 2013,
      genre: "Action-Adventure",
      developer: "Rockstar North"
  },
  {
      id: "fortnite",
      title: "Fortnite",
      subtitle: "Battle Royale | Epic Games",
      banner: "https://i.pinimg.com/736x/2c/04/5f/2c045fa7b427c0ca7f6ae22ddf05f208.jpg",
      thumbnail: "https://i.pinimg.com/736x/2c/04/5f/2c045fa7b427c0ca7f6ae22ddf05f208.jpg",
      trailer: "https://www.youtube.com/embed/your-fortnite-trailer-id",
      beginnerVideos: [
        "https://www.youtube.com/embed/sLmDsgo2vgs?si=RID_EwyK-WZsFH-7",
        "https://www.youtube.com/embed/Psp0UL3PZcw?si=2b0XxOFJNJ8Fd2n-"
      ],
      esportsVideos: [
        "https://www.youtube.com/embed/LdF7XfB9YUI?si=2_wOJAv-HyxXVn7J",
        "https://www.youtube.com/embed/Q0JjC-hw7pY?si=a6MOH8qIksFTEZXq"
      ],
      discord: "https://discord.gg/fortnite",
      telegram: "https://t.me/fortniteofficial",
      rating: 4.7,
      platforms: ["PC", "PlayStation", "Xbox", "Mobile"],
      releaseYear: 2017,
      genre: "Battle Royale",
      developer: "Epic Games"
  },
  {
    id: "valorant",
    title: "VALORANT",
    subtitle: "Tactical Shooter | Riot Games",
    banner: "https://logos-download.com/wp-content/uploads/2021/01/Valorant_Logo.png", // Square format (1:1)
    thumbnail: "https://logos-download.com/wp-content/uploads/2021/01/Valorant_Logo.png",      // Rectangular thumbnail
    trailer: "https://www.youtube.com/embed/lWr6dhTcu-E", // Official trailer
    beginnerVideos: [
      "https://www.youtube.com/embed/34P2acg-Wdo?si=JTsFyRejDXJ-3AaI",
      "https://www.youtube.com/embed/XDOm0stH5V4?si=lNmlfQtRI5hB5pML"
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/IOq7iXqDJgc?si=rej7WpFxHqXsJ7IO",
      "https://www.youtube.com/embed/-Ye9FCByy0c?si=MY4Cw8Qv-_cd3VtI"
    ],
    discord: "https://discord.gg/valorant",
    telegram: "https://t.me/valorantnews",
    rating: 4.8,
    platforms: ["PC"],
    releaseYear: 2020,
    genre: "Tactical FPS",
    developer: "Riot Games",
    modes: ["Competitive", "Unrated", "Spike Rush"]
  },
  
  {
    id: "cs2",
    title: "Counter-Strike 2",
    subtitle: "FPS | Valve",
    banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRcmlKQXxUT-HxutGdQf1253q_OmGOTkjOGw&s",
    thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRcmlKQXxUT-HxutGdQf1253q_OmGOTkjOGw&s",
    trailer: "https://www.youtube.com/embed/c80dVYcL69E?si=V-7E8Gau29cQwSOZ",
    beginnerVideos: [
      "https://www.youtube.com/embed/vHJ2C976Rt4?si=CLiKXMIp1Ao8-Q-8",
      "https://www.youtube.com/embed/bJ1Flcla3SE?si=RnZJOMWa-3uLmSvg"
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/E78RfrjoBvM?si=ALFvt8kmnNhbuzbX",
      "https://www.youtube.com/embed/rFv4AJm9xbw?si=XTznXwEWyRFhhQ8U"
    ],
    discord: "https://discord.gg/callofduty",
    telegram: "https://t.me/warzonenews",
    rating: 4.5,
    platforms: ["PC", "PS5", "Xbox"],
    releaseYear: 2020,
    genre: "Battle Royale",
    modes: ["Battle Royale", "Resurgence", "Plunder"]
  },
  {
    id: "lol",
    title: "League of Legends",
    subtitle: "MOBA | Riot Games",
    banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjgyD32nA5NKeKdlo-YbX3LmuQbWq1naUs8Q&s",
    thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjgyD32nA5NKeKdlo-YbX3LmuQbWq1naUs8Q&s",
    trailer: "https://www.youtube.com/embed/vzHrjOMfHPY",
    beginnerVideos: [
      "https://www.youtube.com/embed/tQbo2X2Qysc?si=Wbp1tOQonZfWINZ4",
      "https://www.youtube.com/embed/987uaDfwDuE?si=rWkXTn5c_cAg8y4L"
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/kjBo6jNKfPw?si=mqtHb8Rl8TBV8kRz",
      "https://www.youtube.com/embed/kjBo6jNKfPw?si=mqtHb8Rl8TBV8kRz"
    ],
    discord: "https://discord.gg/leagueoflegends",
    telegram: "https://t.me/lolwildrift",
    rating: 4.6,
    platforms: ["PC"],
    releaseYear: 2009,
    genre: "MOBA",
    modes: ["Summoner's Rift", "ARAM", "Teamfight Tactics"]
  },
  {
    id: "dota2",
    title: "Dota 2",
    subtitle: "MOBA | Valve",
    banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTetHIKzM5b4Kf200ekWEl0KdFUWWPHEN0ONg&s",
    thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTetHIKzM5b4Kf200ekWEl0KdFUWWPHEN0ONg&s",
    trailer: "https://www.youtube.com/embed/-cSFPIwMEq4",
    beginnerVideos: [
      "https://www.youtube.com/embed/ha1ZyeQY_tw?si=qSbPEQ7lc32z9tw0",
      "https://www.youtube.com/embed/ATnETqrWbwo?si=8cn2KjtOKzHnllHi"
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/7p6ydvLgJ5E",
      "https://www.youtube.com/embed/0w0uVq3cX64"
    ],
    discord: "https://discord.gg/dota2",
    telegram: "https://t.me/dota2official",
    rating: 4.7,
    platforms: ["PC"],
    releaseYear: 2013,
    genre: "MOBA",
    modes: ["All Pick", "Turbo", "Ability Draft"]
  },
  {
    id: "fallguys",
    title: "Fall Guys",
    subtitle: "Battle Royale | Mediatonic",
    banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREuH_nYhH3qsSNIlbEacOQ9orH3FcIl__u2w&s",
    thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREuH_nYhH3qsSNIlbEacOQ9orH3FcIl__u2w&s",
    trailer: "https://www.youtube.com/embed/Wj3dUvGLjNQ",
    beginnerVideos: [
      "https://www.youtube.com/embed/VQuIR7nlKoQ?si=M1oQAHP36q1qYOut",
      "https://www.youtube.com/embed/Xy5EkDViHuE?si=DtBXvclY8Ccw7HuX"
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/7p6ydvLgJ5E",
      "https://www.youtube.com/embed/0w0uVq3cX64"
    ],
    discord: "https://discord.gg/fallguys",
    telegram: "https://t.me/fallguysgame",
    rating: 4.1,
    platforms: ["PC", "PS5", "Xbox", "Switch"],
    releaseYear: 2020,
    genre: "Party Royale",
    modes: ["Solo", "Squads", "Creative"]
  },
  {
  id: "warzone",
    title: "Call of Duty: Warzone",
    subtitle: "Battle Royale | Activision",
    banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoq15POQiiom6Jle_Ya0yyXSjhfBX8To-J0A&s",
    thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoq15POQiiom6Jle_Ya0yyXSjhfBX8To-J0A&s",
    trailer: "https://www.youtube.com/embed/0E44DClsX5Q?si=4HxvxUppbF5FDORD",
    beginnerVideos: [
      "https://www.youtube.com/embed/tiWn6Ql4fzs?si=tj2fHV6thAk92pg9", // Warzone Beginner Guide
      "https://www.youtube.com/embed/nW_vvi0XMNI?si=vCBiG4fXSvRH-w-P"  // Warzone Basics
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/O5n_j3ALjH8?si=hVydOYobZCvqWuk-", // Warzone Tournament Highlights
      "https://www.youtube.com/embed/GxzOUsbNMv4?si=QjU7nZFYn9Rd6rGC"  // Pro Plays
    ],
    discord: "https://discord.gg/callofduty",
    telegram: "https://t.me/warzoneofficial",
    rating: 4.7,
    platforms: ["PC", "PlayStation", "Xbox"],
    releaseYear: 2020,
    genre: "Battle Royale",
    developer: "Infinity Ward",
    modes: ["Battle Royale", "Plunder", "Resurgence"]
  },
  {
    id: "freefire",
    title: "Free Fire",
    subtitle: "Battle Royale | Garena",
    banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUd_MNTgh6ZBUVan6ETfW_1NuBu6vzHD8Zcg&s",
    thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUd_MNTgh6ZBUVan6ETfW_1NuBu6vzHD8Zcg&s",
    trailer: "https://www.youtube.com/embed/GAtay81-Ix0?si=kQYeCIqMe5CBmhNT",
    beginnerVideos: [
      "https://www.youtube.com/embed/tGfHVgPUorg?si=X8lgDpNNVeRPwM5J", // Free Fire Beginner Guide
      "https://www.youtube.com/embed/JNQPIsCAOgo?si=t6ebhNwrbOeYkKEl"  // Free Fire Tips
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/7gfBlTHIin4?si=vNwAqgj9oe3fznRK", // Free Fire World Series
      "https://www.youtube.com/embed/g3kWq-x4xoc?si=E2lsU3jxK7NKgqQY"  // Pro Player Highlights
    ],
    discord: "https://discord.gg/freefire",
    telegram: "https://t.me/freefireen",
    rating: 4.5,
    platforms: ["Mobile"],
    releaseYear: 2017,
    genre: "Battle Royale",
    developer: "Garena",
    modes: ["Classic", "Clash Squad", "Ranked"]
  },
  {
    id: "bgmi",
    title: "Battlegrounds Mobile India",
    subtitle: "Battle Royale | Krafton",
    banner: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn_lkvJhHPnDpgkWIGo80I0ozKUuCmarW1Hg&s",
    thumbnail: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn_lkvJhHPnDpgkWIGo80I0ozKUuCmarW1Hg&s",
    trailer: "https://www.youtube.com/embed/77uJNk-l2gE?si=rArCVZ3iX40J587P",
    beginnerVideos: [
      "https://www.youtube.com/embed/z3pQVQbdg0g?si=7mqCcsp7E1_YFVLn", // BGMI Beginner Guide
      "https://www.youtube.com/embed/d1dFipcjKfE?si=AH112ELUFufpNSZZ"  // BGMI Settings
    ],
    esportsVideos: [
      "https://www.youtube.com/embed/_Dwio3gX8Fk?si=LabqCeRiDhhdYfkV", // BMPS Highlights
      "https://www.youtube.com/embed/IDp8if7wuHI?si=gue1lAxCx0LhD_1H"  // BGMI Esports
    ],
    discord: "https://discord.gg/bgmi",
    telegram: "https://t.me/bgmiofficial",
    rating: 4.8,
    platforms: ["Mobile"],
    releaseYear: 2021,
    genre: "Battle Royale",
    developer: "Krafton",
    modes: ["Classic", "Arena", "Payload"]
  }

];
// ===== VIDEO SECTION LOADER =====
function loadVideoSections(game) {
  try {
    // Beginner Videos
    const beginnerContainer = document.getElementById('beginnerVideos');
    if (beginnerContainer && game.beginnerVideos) {
      beginnerContainer.innerHTML = game.beginnerVideos
        .filter(url => url && !url.includes('舒克')) // Filter out invalid URLs
        .map(url => `
          <div class="video-wrapper">
            <iframe src="${url.replace('watch?v=', 'embed/')}" 
                    frameborder="0" 
                    allowfullscreen
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
            </iframe>
          </div>
        `).join('');
    }

    // Esports Videos
    const esportsContainer = document.getElementById('esportsVideos');
    if (esportsContainer && game.esportsVideos) {
      esportsContainer.innerHTML = game.esportsVideos
        .filter(url => url && !url.includes('舒克')) // Filter out invalid URLs
        .map(url => `
          <div class="video-wrapper">
            <iframe src="${url.replace('watch?v=', 'embed/')}" 
                    frameborder="0" 
                    allowfullscreen
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
            </iframe>
          </div>
        `).join('');
    }
  } catch (error) {
    console.error("Error loading videos:", error);
  }
}

// Render Games on Homepage
function renderGames() {
  const gamesGrid = document.getElementById('gamesGrid');
  if (gamesGrid) {
    gamesGrid.innerHTML = games.map(game => `
      <a href="game.html?game=${game.id}" class="game-card">
        <img src="${game.thumbnail}" alt="${game.title}">
        <div class="game-info">
          <h3>${game.title}</h3>
          <p>${game.subtitle.split('|')[1].trim()}</p>
          <span class="rating">⭐ ${game.rating}/5</span>
        </div>
      </a>
    `).join('');
  }
}

// Load Game Page Data
function loadGamePage() {
  const gamePage = document.getElementById('gamePage');
  if (gamePage) {
    const urlParams = new URLSearchParams(window.location.search);
    const gameId = urlParams.get('game');
    const game = games.find(g => g.id === gameId);

    if (game) {
      // Load basic info
      document.title = `GameFusion | ${game.title}`;
      document.getElementById('gameBanner').src = game.banner;
      document.getElementById('gameTitle').textContent = game.title;
      document.getElementById('gameSubtitle').textContent = game.subtitle;
      
      // Load main trailer (with URL conversion)
      if (game.trailer) {
        const trailer = document.getElementById('gameTrailer');
        trailer.src = game.trailer.includes('youtube.com') 
          ? game.trailer.replace('watch?v=', 'embed/')
          : game.trailer;
      }

      // Load game details
      document.getElementById('gameGenre').textContent = game.genre;
      document.getElementById('gamePlatforms').textContent = game.platforms.join(", ");
      document.getElementById('gameReleaseYear').textContent = game.releaseYear;
      if (game.developer) {
        document.getElementById('gameDeveloper').textContent = game.developer;
      }
      
      // Load community links
      const communityLinks = document.getElementById('communityLinks');
      communityLinks.innerHTML = `
        <a href="${game.discord}" class="community-btn">
          <i class="fab fa-discord"></i> Discord
        </a>
        <a href="${game.telegram}" class="community-btn">
          <i class="fab fa-telegram"></i> Telegram
        </a>
      `;

      // Load video sections after slight delay
      setTimeout(() => {
        if (game.beginnerVideos || game.esportsVideos) {
          loadVideoSections(game);
        }
      }, 100);
    } else {
      window.location.href = "index.html";
    }
  }
}

// Search Functionality
// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {
  // Get elements
  const searchInput = document.getElementById('searchInput');
  const searchBtn = document.getElementById('searchBtn');
  const searchResults = document.getElementById('searchResults');
  
  // Game search function
  function searchGames(query) {
    // Clear previous results
    searchResults.innerHTML = '';
    
    // If empty query, hide results
    if (!query) {
      searchResults.style.display = 'none';
      return;
    }
    
    // Filter games (case insensitive)
    const results = games.filter(game => 
      game.title.toLowerCase().includes(query.toLowerCase()) ||
      (game.genre && game.genre.toLowerCase().includes(query.toLowerCase())) ||
      (game.developer && game.developer.toLowerCase().includes(query.toLowerCase()))
    );
    
    // Display results
    if (results.length > 0) {
      results.forEach(game => {
        const gameElement = document.createElement('div');
        gameElement.className = 'search-result';
        gameElement.innerHTML = `
          <img src="${game.thumbnail}" alt="${game.title}">
          <div>
            <h3>${game.title}</h3>
            <p>${game.genre} • ${game.platforms.join(', ')}</p>
          </div>
        `;
        gameElement.addEventListener('click', () => {
          window.location.href = `game.html?game=${game.id}`;
        });
        searchResults.appendChild(gameElement);
      });
      searchResults.style.display = 'block';
    } else {
      searchResults.innerHTML = '<div class="no-results">No games found</div>';
      searchResults.style.display = 'block';
    }
  }

  // Event listeners
  searchBtn.addEventListener('click', () => {
    searchGames(searchInput.value.trim());
  });

  searchInput.addEventListener('keyup', (e) => {
    if (e.key === 'Enter') {
      searchGames(searchInput.value.trim());
    }
  });

  // Close results when clicking outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.search-container')) {
      searchResults.style.display = 'none';
    }
  });
});
// Gamer Chat System
class GameChat {
  constructor() {
    this.elements = {
      container: document.querySelector('.game-chat-container'),
      chat: document.querySelector('.game-chat'),
      toggleBtn: document.querySelector('.chat-toggle-btn'),
      messages: document.getElementById('chatMessages'),
      input: document.getElementById('chatInput'),
      sendBtn: document.getElementById('sendMessage'),
      closeBtn: document.querySelector('.close-chat'),
      gameTitle: document.getElementById('chatGameTitle'),
      onlineCount: document.querySelector('.online-count'),
      notificationBadge: document.querySelector('.notification-badge')
    };

    this.state = {
      currentGame: null,
      username: `Player${Math.floor(1000 + Math.random() * 9000)}`,
      unreadMessages: 0,
      isOpen: false
    };

    this.init();
  }

  init() {
    this.setupEventListeners();
    
    // Initialize if on game page
    if (document.getElementById('gamePage')) {
      const gameId = new URLSearchParams(window.location.search).get('game');
      if (gameId) this.setGame(gameId);
    }
  }

  setupEventListeners() {
    // Toggle chat
    this.elements.toggleBtn.addEventListener('click', () => this.toggleChat());
    
    // Close chat
    this.elements.closeBtn.addEventListener('click', () => this.closeChat());
    
    // Send message
    this.elements.sendBtn.addEventListener('click', () => this.sendMessage());
    this.elements.input.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') this.sendMessage();
    });
    
    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!this.elements.container.contains(e.target) && 
          e.target !== this.elements.toggleBtn) {
        this.closeChat();
      }
    });
  }

  setGame(gameId) {
    this.state.currentGame = gameId;
    this.elements.gameTitle.textContent = `${gameId} Lobby`;
    this.updateOnlineCount();
    this.loadChatHistory();
    
    setTimeout(() => {
      this.addSystemMessage("Welcome to the game chat! Type to start chatting.");
    }, 1000);
  }

  toggleChat() {
    this.state.isOpen = !this.state.isOpen;
    this.elements.chat.classList.toggle('active', this.state.isOpen);
    
    if (this.state.isOpen) {
      this.state.unreadMessages = 0;
      this.updateNotificationBadge();
    }
  }

  openChat() {
    this.state.isOpen = true;
    this.elements.chat.classList.add('active');
    this.state.unreadMessages = 0;
    this.updateNotificationBadge();
  }

  closeChat() {
    this.state.isOpen = false;
    this.elements.chat.classList.remove('active');
  }

  sendMessage() {
    const message = this.sanitizeInput(this.elements.input.value.trim());
    if (!message || !this.state.currentGame) return;

    const msg = {
      game: this.state.currentGame,
      sender: this.state.username,
      text: message,
      time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
      type: 'user'
    };
    
    this.addMessage(msg);
    this.saveMessage(msg);
    this.elements.input.value = '';
    
    // Simulate response
    setTimeout(() => {
      this.simulateResponse(msg);
    }, 1000 + Math.random() * 2000);
  }

  addMessage(message) {
    const msgElement = document.createElement('div');
    msgElement.className = `message ${message.type}`;
    msgElement.innerHTML = `
      ${message.type !== 'system' ? `<div class="message-sender">${message.sender}</div>` : ''}
      <div class="message-text">${message.text}</div>
      ${message.type !== 'system' ? `<div class="message-time">${message.time}</div>` : ''}
    `;
    
    this.elements.messages.appendChild(msgElement);
    this.elements.messages.scrollTop = this.elements.messages.scrollHeight;
    
    if (!this.state.isOpen && message.type !== 'system') {
      this.state.unreadMessages++;
      this.updateNotificationBadge();
    }
  }

  addSystemMessage(text) {
    const msg = {
      sender: 'System',
      text: text,
      time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
      type: 'system'
    };
    this.addMessage(msg);
    this.saveMessage(msg);
  }

  simulateResponse(originalMsg) {
    const responses = [
      `Nice one ${originalMsg.sender}! 🎮`,
      "Anyone want to team up?",
      "GG! That was an epic match",
      "I'm streaming this game later at twitch.tv/gamer123",
      "Pro tip: Check out the !help command",
      "The devs just announced a new update!",
      "Did you see the latest esports tournament?",
      `${this.state.currentGame} is my favorite game!`,
      "Let's play together sometime!",
      "What's your favorite character/class?"
    ];
    
    const botMsg = {
      game: this.state.currentGame,
      sender: `Gamer${Math.floor(1000 + Math.random() * 9000)}`,
      text: responses[Math.floor(Math.random() * responses.length)],
      time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
      type: 'other'
    };
    
    this.addMessage(botMsg);
    this.saveMessage(botMsg);
  }

  sanitizeInput(text) {
    return text
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .substring(0, 150);
  }

  saveMessage(message) {
    const chatHistory = JSON.parse(localStorage.getItem('gameChats') || '{}');
    if (!chatHistory[message.game]) {
      chatHistory[message.game] = [];
    }
    chatHistory[message.game].push(message);
    localStorage.setItem('gameChats', JSON.stringify(chatHistory));
  }

  loadChatHistory() {
    const chatHistory = JSON.parse(localStorage.getItem('gameChats') || '{}');
    if (chatHistory[this.state.currentGame]) {
      chatHistory[this.state.currentGame].forEach(msg => {
        this.addMessage(msg);
      });
    }
  }

  updateOnlineCount() {
    const count = Math.floor(15 + Math.random() * 50);
    this.elements.onlineCount.textContent = count;
    setTimeout(() => this.updateOnlineCount(), 10000 + Math.random() * 15000);
  }

  updateNotificationBadge() {
    if (this.state.unreadMessages > 0) {
      this.elements.notificationBadge.textContent = 
        this.state.unreadMessages > 9 ? '9+' : this.state.unreadMessages;
      this.elements.notificationBadge.style.display = 'flex';
    } else {
      this.elements.notificationBadge.style.display = 'none';
    }
  }
}

// Initialize the chat when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  new GameChat();
});






// Initialize
document.addEventListener('DOMContentLoaded', () => {
  renderGames();
  loadGamePage();
  setupSearch();
});