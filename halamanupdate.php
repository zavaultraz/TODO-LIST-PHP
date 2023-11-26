<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<!-- get data -->
<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `tabeltodo` WHERE `id` ='$id'");
$data = mysqli_fetch_array($sql);

?>


<body style="background-color: #FFA33C">
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="image/img/img/brand/logo spirir.png" alt="Bootstrap" width="30" height="24">
            </a>
        </div>
    </nav>
    <form action="update.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
                <h2 class="text-center text-warning font-monospace">Todo list</h2>
                <div class="col-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shdow" id="floatingInput" name="list" value="<?php echo $data['List'] ?>" placeholder="CHANGES THIS">
                        <label for="floatingInput">CHANGES THIS</label>
                    </div>

                </div>
                <div class="col-2">
                    <button class="btn btn-primary"><i class="fa-solid fa-check"></i></button>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
            </div>
        </div>
    </form>
    <div id="carouselExampleAutoplaying" class="carousel slide text-light text-center row justify-content-center m-auto mt-3 py-3 col-md-6" data-bs-ride="carousel" style="background-color:transparent;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h2 class="d-block">"Live is never flat"</h2>
            </div>
            <div class="carousel-item">
                <h2 class="d-block">"Today is beautifull day"</h2>
            </div>
            <div class="carousel-item">
                <h2 class="d-block">"Dont waste your time"</h2>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>