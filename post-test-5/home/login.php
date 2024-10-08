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
    <!-- styles -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/auth.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="main">
        <form action="" method="POST" class="form-add-post">
            <h2 class="heading">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 17q-1.825 0-3.187-1.137T7.1 13H2v-2h5.1q.35-1.725 1.713-2.863T12 7t3.188 1.138T16.9 11H22v2h-5.1q-.35 1.725-1.712 2.863T12 17m0-2q1.25 0 2.125-.875T15 12t-.875-2.125T12 9t-2.125.875T9 12t.875 2.125T12 15" />
                </svg>
                Login
            </h2>
            <div class="form-item">
                <label class="sub-heading" for="email">Email</label>
                <input class="form-input" type="email" name="email" id="email" placeholder="Ex: fuyu@gmail.com">
            </div>

            <div class="form-item">
                <label class="sub-heading" for="password">Password</label>
                <input class="form-input" type="password" name="password" id="password" placeholder="Ex: ********">
            </div>
            <button class="btn btn-primary" type="submit">Login</button>
            <div>
                Don't have an account? <a href="register.php"><span>Register</span></a>
            </div>
        </form>
    </section>
</body>
</html>