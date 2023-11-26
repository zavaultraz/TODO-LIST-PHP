<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
    </style>

</head>

<body style="background-color: #FFA33C;">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/img/img/brand/logo spirir.png" alt="Logo" width="50" height="36" class="d-inline-block align-text-top">
                SEMANGAT
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center m-auto py-3 text-white fs-1 fw-medium col-md-6" style="border-radius: 7px;">TODO LIST <i class="bi bi-person" style="width: 10%;"></i></div>
    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide md-5 w-80%" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/img/1.gif" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="image/img/2.gif" class="d-block w-100" alt="">
            </div>
        </div>
    </div>

    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justify-content-center m-auto shadow mt-3 py-3 col-md-6" style="background-color:transparent;">
                <h2 class="text-center text-light font-monospace">ACTIVITY LIST</h2>
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow" placeholder="add list">
                </div>
                <div class="col-2">
                    <button class="btn btn-light"><i class="fa-solid fa-plus" style="color: #FFA33C;"></i></button>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row justify-content-center text-white m-auto mt-3 py-3  fs-1 fw-medium col-md-6" style="border-radius: 7px;">YOUR LIST ACTIVITY <i class="bi bi-card-list" style="width: 10%;"></i></div>
    </div>
    <!-- get data from local host -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `tabeltodo`");
    $i = 1;
    ?>

    <!-- tampilkan data -->
    <div class="container">
        <div class="row mt-3">
            <?php
            while ($row = mysqli_fetch_array($sql)) {
            ?>


                <div class="col-md-4 mb-4">
                    <div class="col mb-5 md-5">
                        <div class="card border border-warning" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['List'] ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">urutan <?php echo $i++ ?></h6>
                                <p class="card-text text-danger">dont forget about this</p>
                                </p>
                                <a href="halamanupdate.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-warning mx-3"><i class="fa-solid fa-pen-to-square"></i>
                                    <a href="delate.php? ID= <?php echo $row['id'] ?>" class="btn btn-outline-danger icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="fa-solid fa-trash-can"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>