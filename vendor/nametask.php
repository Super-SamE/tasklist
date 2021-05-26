<?php

    require_once 'pdoconnect.php';

    $addtask = $_POST['addtask'];
    $nametask = $_POST['nametask'];

    if(isset($addtask)) {
    $nametask = htmlspecialchars($_POST['nametask']);
    $new_addtask = "INSERT INTO `tasks`(`user_id`, `description`, `created_at`, `status`) VALUES ('1', '$nametask', '1', '0')";
    $newtask = $pdo->query($new_addtask);
    header('Location: tasklist.php');
    }

?>