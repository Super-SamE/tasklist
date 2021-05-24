<?php

    session_start();
    require_once 'pdoconnect.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        require 'links.php';
    ?>

    <title>Вход/Регистрация</title>
</head>
<body>
    <section class="reg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-wrap">
                        <div class="reg-form">
                            <div>
                                <label>Вход/Регистрация</label>
                            </div>
                            <form method="POST" action="signcheck.php">
                                <input type="text" class="form-controll" name="login" placeholder="login...">
                                <input type="password" class="form-controll" name="password" placeholder="Password...">
                                <button type="submit" class="btnn btn-outline-dark" name="auth">Вход/Регистрация</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>