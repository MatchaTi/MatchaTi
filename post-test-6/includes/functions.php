<?php
    function registerUser($conn, $username, $email, $password) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if($row['email'] == $email) {
            echo "<script>alert('Email already use!')</script>";
            return false;
        }
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        return $conn->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$passwordHash')"); 
    }

    function loginUser($conn, $email, $password) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])) {
                return $user;
            } else {
                echo "<script>alert('Invalid password!')</script>";
            }
        } else {
            echo "<script>alert('Invalid email!')</script>";
        }
        return false;
    }
    function addPost($conn, $user_id, $content, $photo) {
    $sql = "INSERT INTO posts (user_id, content, photo) VALUES ('$user_id', '$content', '$photo')";
    return $conn->query($sql);
}

    function getPosts($conn) {
        $sql = "SELECT posts.*, users.username FROM posts JOIN users ON posts.user_id = users.id ORDER BY created_at DESC";
        return $conn->query($sql);
    }

    function getSinglePost($conn, $id) {
        $sql = "SELECT posts.*, users.username FROM posts JOIN users ON posts.user_id = users.id WHERE posts.id = '$id' ORDER BY created_at DESC";
        return $conn->query($sql)->fetch_assoc();
    }

    function updatePost($conn, $id, $content, $photo) {
        $sql = "UPDATE posts SET content = '$content', photo = '$photo' WHERE id = '$id'";
        return $conn->query($sql);
    }

    function deletePost($conn, $id) {
        $sql = "DELETE FROM posts WHERE id = '$id'";
        return $conn->query($sql);
    }

    function checkPhoto($data, $isEdit) {
        $fileName = $data['name'];
        $fileSize = $data['size'];
        $tmpName = $data['tmp_name'];
        var_dump($data);

        $validExt = ['jpg', 'jpeg', 'png'];
        $fileExt = explode('.', $fileName);
        $fileExt = strtolower(end($fileExt));

        if(!in_array($fileExt, $validExt)) {
            echo "<script>alert('Invalid file type!')</script>";
            return false;
        }

        if($fileSize > 1000000) {
            echo "<script>alert('File too large!')</script>";
            return false;
        }

        $newFileName = date('Y-m-d H.i.s');
        $newFileName .= '.';
        $newFileName .= $fileExt;

        if ($isEdit) {
            move_uploaded_file($tmpName, '../../uploads/'.$newFileName);
        } else {
            move_uploaded_file($tmpName, '../uploads/'.$newFileName);
        }

        return $newFileName;
    }
?>