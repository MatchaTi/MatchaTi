<?php
    require '../../includes/connection.php';
    require '../../includes/functions.php';

    session_start();

    $postId = $_GET['id'];
    $result = getSinglePost($conn, $postId);

    if($_SESSION['user_id'] != $result['user_id']) {
        header('Location: ../index.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $content = htmlspecialchars($_POST['content']);

        if(updatePost($conn, $postId, $content)) {
            header('Location: ../index.php');
        } else {
            echo "<script>alert('Failed to update post!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result['content']; ?></title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="main">
        <h2>Edit Post</h2>
        <form action="" method="POST">
            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10"><?php echo $result['content']; ?></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>