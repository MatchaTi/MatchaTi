<?php
    require '../../includes/connection.php';
    require '../../includes/functions.php';

    session_start();

    $postId = $_GET['id'];
    $result = getSinglePost($conn, $postId);
    $photo = $result['photo'] ? $result['photo'] : '';

    if ($_SESSION['user_id'] != $result['user_id']) {
        header('Location: ../index.php');
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $content = htmlspecialchars($_POST['content']);
        $newPhoto = $photo; 

        if(isset($_POST['delete_photo'])) {
            $newPhoto = '';
            if ($photo && file_exists('../../uploads/' . $photo)) {
                unlink('../../uploads/' . $photo);
            }
        }

        if (!empty($_FILES['photo']['name'])) {
            $uploadResult = checkPhoto($_FILES['photo'], true);

            if ($uploadResult) {
                $newPhoto = $uploadResult;
                if ($photo && file_exists('../../uploads/' . $photo)) {
                    unlink('../../uploads/' . $photo);
                }
            }
        }

        if (updatePost($conn, $postId, $content, $newPhoto)) {
            header('Location: ../index.php');
            exit();
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
    <title><?php echo $result['content']; ?> | Commit</title>
    <!-- styles -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/components.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="main">
        <div class="profile-section">
            <h2 class="heading">Edit Post</h2>
        </div>
        <form action="" class="form-add-post" method="POST" enctype="multipart/form-data">
            <div>
                <label for="content" class="sub-heading">Content</label>
                <textarea class="form-input" name="content" id="content"><?php echo $result['content']; ?></textarea>
            </div>
            <input type="file" name="photo" id="photo" value="<?= $result['photo']; ?>" id="photo">
            <?php if($result['photo']): ?>
            <div class="post-image">
                <img src="../../uploads/<?= $result['photo']; ?>" alt="foto">
            </div>
            <button type="button" class="btn btn-primary" id="deletePhotoBtn">Delete Image</button>
            <?php endif; ?>
            <input type="hidden" name="delete_photo" id="deletePhoto" value="0">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <script src="../../js/script.js"></script>
</body>
</html>