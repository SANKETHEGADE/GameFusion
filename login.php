<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - Login</title>
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
        
        .login-container {
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
        
        .login-container::before {
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
        
        .otp-container {
            display: none;
            margin-top: 20px;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .otp-inputs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        
        .otp-inputs input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 1.2rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--primary);
            border-radius: 8px;
            color: white;
        }
        
        .otp-inputs input:focus {
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
        
        .btn-secondary {
            background: transparent;
            color: var(--secondary);
            border: 1px solid var(--primary);
        }
        
        .btn-secondary:hover {
            background: rgba(108, 92, 231, 0.1);
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
        
        .password-container {
            display: none;
            animation: fadeIn 0.5s;
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
    
    <div class="login-container">
        <div class="logo">
            <h1>GameZone</h1>
            <p>Enter the ultimate gaming universe</p>
        </div>
        
        <div id="login-form">
            <div class="input-group">
                <label for="login-id">Mobile Number or Email</label>
                <input type="text" id="login-id" placeholder="Enter mobile number or email">
            </div>
            
            <button class="btn btn-primary" id="send-otp-btn">Send OTP</button>
            
            <div class="otp-container" id="otp-container">
                <div class="input-group">
                    <label>Enter OTP</label>
                    <div class="otp-inputs">
                        <input type="text" maxlength="1" class="otp-input">
                        <input type="text" maxlength="1" class="otp-input">
                        <input type="text" maxlength="1" class="otp-input">
                        <input type="text" maxlength="1" class="otp-input">
                        <input type="text" maxlength="1" class="otp-input">
                        <input type="text" maxlength="1" class="otp-input">
                    </div>
                </div>
                
                <button class="btn btn-primary" id="verify-otp-btn">Verify OTP</button>
                <button class="btn btn-secondary" id="resend-otp-btn">Resend OTP</button>
            </div>
            
            <div class="password-container" id="password-container">
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                </div>
                
                <button class="btn btn-primary" id="login-btn">Login</button>
            </div>
            
            <div class="toggle-mode">
                Don't have an account? <span id="toggle-signup">Sign up</span>
            </div>
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
        
        // OTP functionality
        const sendOtpBtn = document.getElementById('send-otp-btn');
        const verifyOtpBtn = document.getElementById('verify-otp-btn');
        const resendOtpBtn = document.getElementById('resend-otp-btn');
        const loginBtn = document.getElementById('login-btn');
        const otpContainer = document.getElementById('otp-container');
        const passwordContainer = document.getElementById('password-container');
        const loginIdInput = document.getElementById('login-id');
        const passwordInput = document.getElementById('password');
        const otpInputs = document.querySelectorAll('.otp-input');
        const toggleSignup = document.getElementById('toggle-signup');
        
        // Auto-focus next OTP input
        otpInputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }
            });
            
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value.length === 0 && index > 0) {
                    otpInputs[index - 1].focus();
                }
            });
        });
        
        // Send OTP button click
        sendOtpBtn.addEventListener('click', () => {
            const loginId = loginIdInput.value.trim();
            
            if (!loginId) {
                alert('Please enter your mobile number or email');
                return;
            }
            
            // Validate email or mobile number format
            const isEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(loginId);
            const isMobile = /^[0-9]{10,15}$/.test(loginId);
            
            if (!isEmail && !isMobile) {
                alert('Please enter a valid email or mobile number');
                return;
            }
            
            // Simulate sending OTP (in a real app, this would call your backend)
            console.log(`OTP sent to ${loginId}`);
            
            // Show OTP container
            otpContainer.style.display = 'block';
            sendOtpBtn.style.display = 'none';
            
            // Focus first OTP input
            otpInputs[0].focus();
        });
        
        // Verify OTP button click
        verifyOtpBtn.addEventListener('click', () => {
            let otp = '';
            otpInputs.forEach(input => {
                otp += input.value;
            });
            
            if (otp.length !== 6) {
                alert('Please enter the complete 6-digit OTP');
                return;
            }
            
            // In a real app, you would verify the OTP with your backend
            console.log(`Verifying OTP: ${otp}`);
            
            // Simulate successful verification
            setTimeout(() => {
                otpContainer.style.display = 'none';
                passwordContainer.style.display = 'block';
                passwordInput.focus();
            }, 1000);
        });
        
        // Resend OTP button click
        resendOtpBtn.addEventListener('click', () => {
            const loginId = loginIdInput.value.trim();
            console.log(`Resending OTP to ${loginId}`);
            
            // Clear existing OTP inputs
            otpInputs.forEach(input => {
                input.value = '';
            });
            otpInputs[0].focus();
        });
        
        // Login button click
        loginBtn.addEventListener('click', () => {
            const password = passwordInput.value.trim();
            
            if (!password) {
                alert('Please enter your password');
                return;
            }
            
            // In a real app, you would verify credentials with your backend
            console.log(`Logging in with password`);
            
            // Simulate successful login
            alert('Login successful! Redirecting to dashboard...');
            // window.location.href = '/dashboard';
        });
        
        // Toggle to signup
        toggleSignup.addEventListener('click', () => {
            alert('Redirecting to signup page...');
            // window.location.href = '/signup';
        });
    </script>
</body>
</html>