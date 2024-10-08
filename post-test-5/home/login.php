<?php
    include '../includes/connection.php';
    include '../includes/functions.php';

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $user = loginUser($conn, $email, $password);
        if($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Commit</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
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