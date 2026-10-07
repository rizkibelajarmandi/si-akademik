<?php
session_start();

$username_benar = "admin";
$password_benar = "12345";

$pesan = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $username_benar && $password === $password_benar) {

        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit;

    } else {

        $pesan = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

<div class="login-box">

    <h2> Login Konflik  </h2>

    <?php if ($pesan): ?>
        <p class="error">
            <?= $pesan ?>
        </p>
    <?php endif; ?>

    <form method="POST">

        <input
            type="text"
            name="username"
            placeholder="Username"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>

<!-- Ini perubahan buat bikin Pull Request -->