<?php
require 'connection.php';
$qurey = "SELECT * from events";
$result = mysqli_query($conn, $qurey);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Events App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <a class="btn btn-success me-3" href="admin/login.php">Login</a>
                    <a class="btn btn-danger" href="admin/register.php">Register</a>
                </form>
            </div>
        </div>
    </nav>
    <section class="events">
        <div class="container">
            <div class="row">
            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="upload/<?= $rows['photo']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $rows['name']; ?></h5>
                            <p class="card-text"><?= $rows['description']; ?></p>
                           <button type="button" class="btn btn-primary"><?= $rows['event_time']; ?></button><br>
                           <button type="button" class="btn btn-danger"><?= $rows['place']; ?></button><br>
                           <button type="button" class="btn btn-danger"><?= $rows['id_dept']; ?></button><br>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <?php
                 }
                ?>
                
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="Js/script.js"></script>
</body>

</html>