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

    <title>Tasklist</title>
</head>
<body>
    <section class="task-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="content-block">
                        <div class="content">
                            <div>
                                <form method="POST" action="logout.php">
                                    <button class="btn btn-outline-dark" type="submit">Выход</button>
                                </form>
                            </div>
                            <div class="title">
                                <label>Task list</label>
                            </div>
                            <div class="add-task">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <form id="form1">
                                            <input type="text" placeholder="Enter text..." class="form-control">
                                            <div class="btn-form1">
                                                <button type="submit" name="" class="btn btn-outline-dark"><b>REMOVE ALL</b></button>
                                                <button type="submit" name="" class="btn btn-outline-dark"><b>READY ALL</b></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <form>
                                            <button type="submit" name="" class="btn btn-dark">Add Task</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tasks">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div>
                                            <label>Task description</label>
                                        </div>
                                        <form id="form2">
                                            <div class="btn-form2">
                                                <button type="submit" name="" class="btn btn-outline-dark"><b>READY</b></button>
                                                <button type="submit" name="" class="btn btn-outline-dark"><b>DELETE</b></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="circle">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tasks1">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div>
                                            <label>Task description</label>
                                        </div>
                                        <form id="form2">
                                            <div class="btn-form2">
                                                <button type="submit" name="" class="btn btn-outline-dark"><b>UNREADY</b></button>
                                                <button type="submit" name="" class="btn btn-outline-dark"><b>DELETE</b></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="circle1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>