
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameFusion - Register</title>
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
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
            }
        }
        
        .register-container {
            position: relative;
            z-index: 1;
            width: 400px;
            padding: 40px;
            background: rgba(45, 52, 54, 0.8);
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid var(--primary);
            overflow: hidden;
        }
        
        .register-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent 0%,
                transparent 45%,
                var(--primary) 50%,
                transparent 55%,
                transparent 100%
            );
            animation: shine 4s infinite;
            z-index: -1;
        }
        
        @keyframes shine {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo h1 {
            color: var(--accent);
            font-size: 2.5rem;
            text-shadow: 0 0 10px rgba(253, 121, 168, 0.5);
            margin-bottom: 5px;
            font-weight: 800;
        }
        
        .logo p {
            color: var(--secondary);
            font-size: 0.9rem;
        }
        
        .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .input-group label {
            display: block;
            color: var(--secondary);
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        
        .input-group input {
            width: 100%;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--primary);
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .input-group input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 10px rgba(253, 121, 168, 0.5);
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
            margin-bottom: 15px;
        }
        
        .btn-primary:hover {
            background: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(253, 121, 168, 0.4);
        }
        
        .toggle-mode {
            text-align: center;
            margin-top: 20px;
            color: var(--secondary);
            font-size: 0.9rem;
        }
        
        .toggle-mode span {
            color: var(--accent);
            cursor: pointer;
            text-decoration: underline;
        }
        
        .footer {
            margin-top: 30px;
            text-align: center;
            color: var(--secondary);
            font-size: 0.8rem;
        }
        
        .footer a {
            color: var(--accent);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="particles" id="particles"></div>
    
    <div class="register-container">
        <div class="logo">
            <h1>GameFusion</h1>
            <p>Create your gaming account</p>
        </div>
        
        <form id="register-form">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Choose a username" required>
            </div>
            
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>
            
            <div class="input-group">
                <label for="phone">Mobile Number</label>
                <input type="tel" id="phone" placeholder="Enter mobile number">
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Create a password" required>
            </div>
            
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Re-enter your password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        
        <div class="toggle-mode">
            Already have an account? <span id="toggle-login">Login</span>
        </div>
        
        <div class="footer">
            By continuing, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
        </div>
    </div>
    
    <script>
        // Create floating particles
        const particlesContainer = document.getElementById('particles');
        const particleCount = 30;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            
            // Random size between 2px and 8px
            const size = Math.random() * 6 + 2;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            
            // Random position
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100}%`;
            
            // Random animation duration
            particle.style.animationDuration = `${Math.random() * 10 + 10}s`;
            particle.style.animationDelay = `${Math.random() * 5}s`;
            
            particlesContainer.appendChild(particle);
        }
        
        // Form submission
        const registerForm = document.getElementById('register-form');
        const toggleLogin = document.getElementById('toggle-login');
        
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            
            // Basic validation
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            // In a real app, you would send this data to your backend
            console.log('Registration data:', {
                username,
                email,
                password
            });
            
            // Simulate successful registration
            alert('Registration successful! Redirecting to login...');
            window.location.href = 'login2.html';
        });
        
        toggleLogin.addEventListener('click', function() {
            window.location.href = 'login2.html';
        });
    </script>
</body>
</html>