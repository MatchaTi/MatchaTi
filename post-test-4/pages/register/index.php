<?php 
session_start();

if(isset($_SESSION['username'])) {
    header("Location: ../board");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = htmlspecialchars($_POST['username']);
    $nim = htmlspecialchars($_POST['nim']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo "Hello, " . $username;
    $_SESSION['username'] = $username;
    header("Location: ../board");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Commit</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <!-- styles -->
    <link rel="stylesheet" href="../../style.css" />
    <link rel="stylesheet" href="register.css">
    <!-- favicons -->
    <link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon" />
</head>
<body>
    <?php 
        include '../../components/navbar.php';
        echo Navbar();
    ?>
    <section class="register-container">
        <h2 class="sub-heading">Commit</h2>
        <p>Registration</p>
        <p>Input your information registration</p>
        <form action="" class="two-column" method="POST">
            <div class="form-item">
                <label for="username" class="form-title">Username</label>
                <input type="text" class="form-input" id="username" name="username" placeholder="Ex: Raana" required>
            </div>
            <div class="form-item">
                <label for="nim" class="form-title">NIM</label>
                <input type="number" class="form-input" id="nim" name="nim" placeholder="Ex: 2309106065" required>
            </div>
            <div class="form-item">
                <label for="email" class="form-title">Email</label>
                <input type="email" class="form-input" id="email" name="email" placeholder="Ex: raana@gmail.com" required>
            </div>
            <div class="form-item">
                <label for="password" class="form-title">Password</label>
                <input type="password" class="form-input" id="password" name="password" placeholder="Ex: *********" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <script src="../../logic.js"></script>
</body>
</html>