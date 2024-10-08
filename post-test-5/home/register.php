<?php
    include '../includes/connection.php';
    include '../includes/functions.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if(registerUser($conn, $username, $email, $password)) {
            echo "<script>alert('Registration successful!')</script>";
            header('Location: login.php');
        } else {
            echo "<script>alert('Registration failed!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Commit</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="POST">
        <div class="form-input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Ex: Fuyu">
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ex: fuyu@gmail.com">
        </div>

        <div class="form-input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Ex: ********">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>