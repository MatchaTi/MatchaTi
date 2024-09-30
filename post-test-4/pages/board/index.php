<?php 
 session_start();
 
 if(!isset($_SESSION['username'])) {
     header("Location: ../register");
 }

 if($_SERVER["REQUEST_METHOD"] == "POST") {
        $taskname = htmlspecialchars($_POST['taskname']);
        $description = htmlspecialchars($_POST['description']);
        $dueDate = htmlspecialchars($_POST['dueDate']);
        $priority = htmlspecialchars($_POST['priority']);
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board | Commit</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <!-- styles -->
    <link rel="stylesheet" href="../../style.css" />
    <link rel="stylesheet" href="board.css">
    <!-- favicons -->
    <link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon" />
</head>
<body>
    <?php 
        include '../../components/navbar.php';
        echo Navbar();
    ?>
    <section class="add-task-container">
        <h2 class="sub-heading">Commit Boards</h2>
        <form action="" class="form-task" method="POST">
            <div class="form-item">
                <label for="taskname" class="form-title">Task Name</label>
                <input type="text" class="form-input" id="taskname" name="taskname" placeholder="Ex: Mengoding" required>
            </div>
            <div class="form-item">
                <label for="description" class="form-title">Description Task</label>
                <input type="text" class="form-input" id="description" name="description" placeholder="Ex: Mengerjakan post test 4 WEB" required>
            </div>
            <div class="form-item">
                <label for="dueDate" class="form-title">Due Date</label>
                <input type="date" class="form-input" id="dueDate" name="dueDate" placeholder="Ex: 2024-09-30" required>
            </div>
            <div class="form-item">
                <label for="priority" class="form-title">Priority</label>
                <select name="priority" id="priority" class="form-input">
                    <option value="backlog" selected>Backlog</option>
                    <option value="progress">Progress</option>
                    <option value="done">Done</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <section>
        <h2 class="sub-heading">Tasks</h2>
        <div class="task-container">
            <div class="task-item">
                <div>
                    <div class="form-title">Task Name</div>
                    <div><?= $taskname ?></div>
                </div>
                <div>
                    <div class="form-title">Description</div>
                    <div><?= $description ?></div>
                </div>
                <div>
                    <div class="form-title">Due Date</div>
                    <div><?= $dueDate ?></div>
                </div>
                <div>
                    <div class="form-title">Priority</div>
                    <div class="<?= $priority ?> priority"><?= $priority ?></div>
                </div>
            </div>
            <div class="task-item">
                <div>
                    <div class="form-title">Task Name</div>
                    <div><?= $taskname ?></div>
                </div>
                <div>
                    <div class="form-title">Description</div>
                    <div><?= $description ?></div>
                </div>
                <div>
                    <div class="form-title">Due Date</div>
                    <div><?= $dueDate ?></div>
                </div>
                <div>
                    <div class="form-title">Priority</div>
                    <div class="<?= $priority ?> priority"><?= $priority ?></div>
                </div>
            </div>
            <div class="task-item">
                <div>
                    <div class="form-title">Task Name</div>
                    <div><?= $taskname ?></div>
                </div>
                <div>
                    <div class="form-title">Description</div>
                    <div><?= $description ?></div>
                </div>
                <div>
                    <div class="form-title">Due Date</div>
                    <div><?= $dueDate ?></div>
                </div>
                <div>
                    <div class="form-title">Priority</div>
                    <div class="<?= $priority ?> priority"><?= $priority ?></div>
                </div>
            </div>
        </div>
    </section>
    <script src="../../logic.js"></script>
</body>
</html>