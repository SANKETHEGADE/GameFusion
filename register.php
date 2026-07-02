<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameFusion | Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Rajdhani:wght@400;600&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Rajdhani', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #060612;
            overflow: hidden;
        }

        .bg {
            position: fixed; inset: 0; z-index: 0;
            background:
                radial-gradient(ellipse at 15% 50%, rgba(168,85,247,0.25) 0%, transparent 55%),
                radial-gradient(ellipse at 85% 20%, rgba(6,182,212,0.2)  0%, transparent 50%),
                radial-gradient(ellipse at 60% 85%, rgba(236,72,153,0.15) 0%, transparent 45%);
        }

        .orb { position: fixed; border-radius: 50%; filter: blur(60px); animation: float 8s ease-in-out infinite; z-index: 0; }
        .orb-1 { width:300px;height:300px;background:rgba(168,85,247,0.18);top:-80px;left:-80px;animation-delay:0s; }
        .orb-2 { width:250px;height:250px;background:rgba(6,182,212,0.15);bottom:-60px;right:-60px;animation-delay:3s; }
        .orb-3 { width:180px;height:180px;background:rgba(236,72,153,0.12);top:50%;left:50%;animation-delay:5s; }

        @keyframes float {
            0%,100% { transform:translate(0,0) scale(1); }
            33%      { transform:translate(20px,-20px) scale(1.05); }
            66%      { transform:translate(-15px,15px) scale(0.95); }
        }

        .grid {
            position:fixed;inset:0;z-index:0;
            background-image:
                linear-gradient(rgba(168,85,247,0.04) 1px,transparent 1px),
                linear-gradient(90deg,rgba(168,85,247,0.04) 1px,transparent 1px);
            background-size:50px 50px;
        }

        .card {
            position:relative;z-index:10;width:100%;max-width:440px;
            background:rgba(14,14,28,0.85);border:1px solid rgba(168,85,247,0.25);
            border-radius:20px;padding:40px 40px;backdrop-filter:blur(20px);
            box-shadow:0 0 0 1px rgba(168,85,247,0.1),0 30px 80px rgba(0,0,0,0.6),inset 0 1px 0 rgba(255,255,255,0.05);
        }

        .logo { text-align:center;margin-bottom:28px; }
        .logo-icon { font-size:38px;display:block;margin-bottom:8px;animation:pulse 2s ease-in-out infinite; }

        @keyframes pulse { 0%,100%{transform:scale(1);}50%{transform:scale(1.08);} }

        .logo h1 {
            font-family:'Orbitron',monospace;font-size:24px;font-weight:900;
            background:linear-gradient(135deg,#a855f7 0%,#06b6d4 50%,#ec4899 100%);
            -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;letter-spacing:2px;
        }
        .logo p { color:#4a4a6a;font-size:12px;margin-top:4px;letter-spacing:1px; }

        .tabs { display:flex;background:rgba(0,0,0,0.3);border:1px solid rgba(255,255,255,0.06);border-radius:10px;padding:4px;margin-bottom:24px; }
        .tab { flex:1;padding:10px;text-align:center;text-decoration:none;border-radius:7px;font-size:14px;font-weight:600;letter-spacing:1px;color:#4a4a6a;transition:all 0.25s; }
        .tab.active { background:linear-gradient(135deg,#a855f7,#06b6d4);color:white;box-shadow:0 4px 15px rgba(168,85,247,0.4); }

        .errors { background:rgba(239,68,68,0.08);border:1px solid rgba(239,68,68,0.25);border-radius:10px;padding:12px 16px;margin-bottom:18px; }
        .errors p { color:#f87171;font-size:13px;line-height:1.7; }

        .field { margin-bottom:15px; }
        .field label { display:block;font-size:11px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:#5a5a8a;margin-bottom:7px; }
        .field-inner { position:relative;display:flex;align-items:center; }
        .field-inner i { order:1;position:absolute;left:15px;color:#3a3a5a;font-size:14px;pointer-events:none;transition:color 0.2s; }
        .field-inner input { order:2;width:100%;background:rgba(0,0,0,0.35);border:1px solid rgba(255,255,255,0.07);border-radius:10px;padding:12px 14px 12px 44px;color:#e2e2f0;font-size:15px;font-family:'Rajdhani',sans-serif;outline:none;transition:border-color 0.25s,box-shadow 0.25s; }
        .field-inner input::placeholder { color:#2a2a4a; }
        .field-inner input:focus { border-color:rgba(168,85,247,0.5);box-shadow:0 0 0 3px rgba(168,85,247,0.1); }
        .field-inner:focus-within i { color:#a855f7; }

        .btn { width:100%;padding:14px;border:none;border-radius:10px;font-family:'Orbitron',monospace;font-size:13px;font-weight:700;letter-spacing:2px;color:white;cursor:pointer;margin-top:6px;background:linear-gradient(135deg,#a855f7 0%,#06b6d4 100%);box-shadow:0 4px 20px rgba(168,85,247,0.35);transition:transform 0.15s,box-shadow 0.15s;position:relative;overflow:hidden; }
        .btn::before { content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,255,255,0.15),transparent);opacity:0;transition:opacity 0.2s; }
        .btn:hover { transform:translateY(-2px);box-shadow:0 8px 30px rgba(168,85,247,0.5); }
        .btn:hover::before { opacity:1; }
        .btn:active { transform:translateY(0); }

        .foot { text-align:center;margin-top:20px;color:#3a3a5a;font-size:13px; }
        .foot a { color:#a855f7;text-decoration:none;font-weight:600; }
        .foot a:hover { color:#06b6d4; }
    </style>
</head>
<body>
    <div class="bg"></div>
    <div class="grid"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <div class="card">
        <div class="logo">
            <span class="logo-icon">🎮</span>
            <h1>GAMEFUSION</h1>
            <p>JOIN THE COMMUNITY</p>
        </div>

        <div class="tabs">
            <a href="login.php" class="tab">LOGIN</a>
            <a href="register.php" class="tab active">REGISTER</a>
        </div>

        <?php if (count($errors) > 0): ?>
        <div class="errors">
            <?php foreach ($errors as $e): ?>
                <p><i class="fas fa-exclamation-triangle"></i> <?= htmlspecialchars($e) ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <div class="field">
                <label>Username</label>
                <div class="field-inner">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Choose a username" value="<?= htmlspecialchars($username) ?>">
                </div>
            </div>
            <div class="field">
                <label>Email</label>
                <div class="field-inner">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Your email address" value="<?= htmlspecialchars($email) ?>">
                </div>
            </div>
            <div class="field">
                <label>Password</label>
                <div class="field-inner">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_1" placeholder="Min. 6 characters">
                </div>
            </div>
            <div class="field">
                <label>Confirm Password</label>
                <div class="field-inner">
                    <i class="fas fa-shield-alt"></i>
                    <input type="password" name="password_2" placeholder="Repeat your password">
                </div>
            </div>
            <button type="submit" name="reg_user" class="btn">
                <i class="fas fa-gamepad"></i> &nbsp; JOIN GAMEFUSION
            </button>
        </form>

        <div class="foot">
            Already a member? <a href="login.php">Sign in</a>
        </div>
    </div>
</body>
</html>
