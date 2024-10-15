<?php
    include '../includes/connection.php';
    include '../includes/functions.php';

    session_start();

    $username = $_SESSION['username'];
    if(!isset($username)) {
        header('Location: login.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $content = htmlspecialchars($_POST['content']);
        $user_id = $_SESSION['user_id'];
        $photo = $_FILES['photo'] ? checkPhoto($_FILES['photo'], false) : '';
        var_dump($photo);

        if(addPost($conn, $user_id, $content, $photo)) {
            header('Location: index.php');
        } else {
            echo "<script>alert('Failed to add post!')</script>";
        }
    }

    $posts = getPosts($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Commit</title>
    <!-- styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/components.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body class="">
    <?php
        include '../components/navbar.php';
        echo navbar();
    ?>
    <section class="main">
        <div class="profile-section">
            <h2 class="heading">Home</h2>
            <div class="profile-action">
                <div class="profile-picture">
                    <img src="https://ui-avatars.com/api/?name=<?= $username; ?>?background=random" alt="">
                </div>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <form action="" method="POST" class="form-add-post" enctype="multipart/form-data">
            <div class="form-item">
                <label for="content" class="sub-heading">Create Post</label>
                <textarea class="form-input" name="content" id="content" placeholder="<?php echo $username.' what are you thinking?'; ?>"></textarea>
            </div>
            <input type="file" name="photo" id="photo" accept=".jpg, .jpeg, .png">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="contents">
            <?php while($post = $posts->fetch_assoc()):?>
                <div class="content-item">
                    <div class="content-item-left">
                        <div class="profile-picture">
                            <img src="https://ui-avatars.com/api/?name=<?= $post['username']; ?>?background=random" alt="">
                        </div>
                    </div>
                    <div class="content-item-right">
                        <div class="content-profile">
                            <div class="profile-username">
                                <h3 class="sub-heading"><?= $post['username'] ?></h3>
                            </div>
                            <div class="profile-action">
                                <p><?= $post['created_at'] ?></p>
                                <?php if($post['user_id'] == $_SESSION['user_id']): ?>
                                    <button class="btn action-button">. . .</button>
                                    <div class="floating-action">
                                        <a href="posts/editPost.php?id=<?= $post['id'] ?>">Edit</a>
                                        <a href="posts/deletePost.php?id=<?= $post['id'] ?>">Delete</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <p class="content-post"><?= $post['content'] ?></p>
                        <?php if($post['photo']): ?>
                        <div class="post-image">
                            <img src="../uploads/<?= $post['photo']?>" alt="foto">
                        </div>
                        <?php endif; ?>
                        <div class="interact-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.891 1 4.127L3 21l4.873-1c1.236.64 2.64 1 4.127 1" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10.308 13.692l4.846-4.846M20.11 5.89l-4.09 13.294c-.367 1.192-.55 1.788-.867 1.985a1 1 0 0 1-.912.076c-.344-.143-.624-.7-1.182-1.816l-2.59-5.182a2 2 0 0 0-.193-.342a1 1 0 0 0-.18-.181a2 2 0 0 0-.331-.186L4.572 10.94c-1.115-.558-1.673-.837-1.816-1.181a1 1 0 0 1 .076-.913c.197-.316.793-.5 1.985-.867l13.295-4.09c.937-.289 1.405-.433 1.722-.316a1 1 0 0 1 .594.594c.116.316-.028.784-.316 1.72z" />
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    <script src="../js/script.js"></script>
</body>
</html>
