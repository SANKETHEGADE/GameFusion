<?php
session_start();

$username = "";
$email    = "";
$errors   = array();

$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER
if (isset($_POST['reg_user'])) {
    $username   = mysqli_real_escape_string($db, trim($_POST['username']));
    $email      = mysqli_real_escape_string($db, trim($_POST['email']));
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if (empty($username))            array_push($errors, "Username is required");
    if (empty($email))               array_push($errors, "Email is required");
    if (empty($password_1))          array_push($errors, "Password is required");
    if ($password_1 !== $password_2) array_push($errors, "Passwords do not match");

    if (count($errors) === 0) {
        $check  = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $check);
        $user   = mysqli_fetch_assoc($result);
        if ($user) {
            if ($user['username'] === $username) array_push($errors, "Username already taken");
            if ($user['email']    === $email)    array_push($errors, "Email already registered");
        }
    }

    if (count($errors) === 0) {
        $password = md5($password_1);
        mysqli_query($db, "INSERT INTO users (username, email, password) VALUES('$username','$email','$password')");
        $_SESSION['username'] = $username;
        header('Location: GameFusion.php');
        exit();
    }
}

// LOGIN
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, trim($_POST['username']));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) array_push($errors, "Username is required");
    if (empty($password)) array_push($errors, "Password is required");

    if (count($errors) === 0) {
        $password = md5($password);
        $results  = mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password'");
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            header('Location: GameFusion.php');  // ← goes straight to your site
            exit();
        } else {
            array_push($errors, "Wrong username or password");
        }
    }
}
?>
