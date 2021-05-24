<?php

    session_start();
    require_once 'pdoconnect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $auth = $_POST['auth'];

    if($auth) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = md5($password);
        $_SESSION['auth'] = $_POST['auth'];
    }

    if($_SESSION['auth']) {
        if($_SESSION['login'] and $_SESSION['password']) {
            $str_auth_user="SELECT * FROM `users` WHERE login='$_SESSION[login]' and password='$_SESSION[password]'";
            $run_auth_user=$pdo->query($str_auth_user);
            $true_user=$run_auth_user->rowCount();
            $out_user=$run_auth_user->fetch();
            if ($true_user==1) {
                header('Location: tasklist.php');
            } else {
                $password=md5($password);
                $reg="INSERT INTO `users` (`login`, `password`, `created_at`) VALUES ('$login','$password','1')";
                $run_register=$pdo->query($reg);
                if ($run_register) {
                    header('Location: tasklist.php');
                } else {
                    header('Location: signin.php');
                    echo 'Такой логин уже существует';
                }
            }
    } else {
        header('Location: signin.php');
      }
    }

?>