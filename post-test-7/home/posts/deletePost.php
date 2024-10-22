<?php
    require '../../includes/connection.php';
    require '../../includes/functions.php';

    session_start();

    $postId = $_GET['id'];
    $result = getSinglePost($conn, $postId);

    if($_SESSION['user_id'] != $result['user_id']) {
        header('Location: ../index.php');
    } else {
        deletePost($conn, $postId);
        header('Location: ../index.php');
    }
?>