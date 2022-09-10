<?php
session_start();

if(!isset($_SESSION["login"])){
    header('Location: pages/users/login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/commons/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
</head>

<body>
    <nav class="navbar fixed" style="background-color: #143788;">
        <div class="container-fluid">
            <div class="logo">
                <img src="assets/img/commons/home.png" alt="" width="50px" style="margin-left: 15px;">
            </div>
            <ul class="nav" style="margin-right: 20px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/booking/booking.php">BOOKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOKASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="controller/users/logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <div class="img-content">
            <img src="assets/img/commons/img1.png" alt="" width="100%" height="700px">
        </div>
    </div>

    <div class="container">
        <form class="row g-3 mt-3 center">
            <div class="col-auto" style="margin-left: 30px;margin-right: 30px;">
                <p style="color: white;font-style: italic;">Search<br>
                    <b style="text-decoration: none;">PROPERTY</b>
                </p>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" id="semua_lokasi" placeholder="Semua Lokasi">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" id="tipe" placeholder="Type">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" id="kamar_tidur" placeholder="Kamar Tidur">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" id="kamar_mandi" placeholder="Kamar Mandi">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-warning mb-3 "><i class="fa fa-search"
                        style="padding: 2px"></i>Cari</button>
            </div>
        </form>
    </div>

    <div class="container-fluid" style="background-color: #dddddd; width: 98%;">
        <div class="row row-cols-3" style="color: #2d4d75; padding: 6px;">
            <div class="col">FEATURED PROPERTY</div>
            <div class="col" style="text-align: center;">SEWA PROPERTY</div>
            <div class="col" style="text-align: right;">JUAL PROPERTY</div>
        </div>
    </div>

    <div class="container" style="background-color: white;">
        <h1>Hello Wolrd</h1>
    </div>
</body>

<script src="assets/js/bootstrap.min.js"></script>

</html>