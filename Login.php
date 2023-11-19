<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $loginUsername = $_POST["email"] ?? '';
    $loginPassword = $_POST["pswd"] ?? '';

    if (empty($loginUsername) || empty($loginPassword)) {
        echo "<h1 style='color: red;'>Please fill in all fields for login!</h1>";
    } else {
        $users = json_decode(file_get_contents("users.json"), true) ?? [];
        $userFound = false;

        foreach ($users as $user) {
            if ($user["email"] === $loginUsername && $user["password"] === $loginPassword) {
                $userFound = true;
                $_SESSION["username"] = $user["username"];
                header("refresh:.3;url=portfolio.php");
                exit();
            }
        }

        if (!$userFound) {
            echo "<h1 style='color: red;'>Invalid username or password for login!</h1>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $signupUsername = $_POST["username"] ?? '';
    $signupPassword = $_POST["pswd"] ?? '';
    $signupEmail = $_POST["email"] ?? '';

    if (empty($signupUsername) || empty($signupPassword) || empty($signupEmail)) {
        echo "<h1 style='color: red;'>Please fill in all fields for signup!</h1>";
    } else {
        $users = json_decode(file_get_contents("users.json"), true) ?? [];

        foreach ($users as $user) {
            if ($user["username"] === $signupUsername || $user["email"] === $signupEmail) {
                echo "<h1 style='color: red;'>Username or Email already exists for signup!</h1>";
                exit();
            }
        }
        $newUser = [
            "username" => $signupUsername,
            "password" => $signupPassword,
            "email" => $signupEmail,
        ];
        $users[] = $newUser;
        
        file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));

        echo "<h1 style='color: green;'>Signup successful! You can now login.</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Log In Page</title>
    <link rel="stylesheet" href="loginstylee.css">
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <form action="#" method="post">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="username" placeholder="username" required="">
            <input type="email" name="email" placeholder="email" required="">
            <input type="Password" name="pswd" placeholder="password" required="">
            <button type="submit" name="signup">Sign up</button>
        </form>
    </div>

    <div class="login">
        <form action="#" method="post">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="email" required="">
            <input type="Password" name="pswd" placeholder="Password" required="">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</div>
</body>
</html>
