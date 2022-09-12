<?php
 require('../../database/db.php');

 $blok_perumahan = mysqli_query($db, "SELECT * FROM tbl_perumahan");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../assets/css/commons/index.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar fixed" style="background-color: #143788;">
        <div class="container-fluid">
            <div class="logo">
                <img src="../../assets/img/commons/home.png" alt="" width="50px" style="margin-left: 15px;">
            </div>
            <ul class="nav" style="margin-right: 20px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../index.php">HOME</a>
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
    <div class="container">
        <section class="main-left">
            <img src="../../assets/img/commons/img1.png" alt="" class="imgs" style="margin-right: 50px;">
        </section>  
        <section class="main-right">
            <br>
            <h4>Data Perumahan</h4>

            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
                <div class="form-group">
                    <label for="sel1">Select Blok</label>
                    <select class="form-control" name="nama_blok">
                        <?php

                        $no = 0;
                        while ($data = mysqli_fetch_array($blok_perumahan)) {
                            $no++;

                            $ket = "";
                            if (isset($_GET['nama_blok'])) {
                                $perumahan = trim($_GET['kode_perumahan']);

                                if ($perumahan == $data['kode_perumahan']) {
                                    $ket = "selected";
                                }
                            }
                        ?>
                            <option <?php echo $ket; ?> value="<?php echo $data['kode_perumahan']; ?>"><?php echo $data['nama_perumahan']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="pilih">
                </div>
            </form>

            <table class="table table-bordered table-hover">
                <br>
                <thead style="text-align:center ;">
                    <tr>
                        <th>No</th>
                        <th style="width: 120px;">Kode Blok</th>
                        <th style="width: 130px;">Nama Blok</th>
                        <th style="width: 280px;">Aksi</th>
                    </tr>
                </thead>
                <?php


                $hasil = mysqli_query($db, "SELECT * FROM detail_perumahan");
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>
                    <tbody style="text-align: center;">
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['kode_blok'];   ?></td>
                            <td><?= $data['nama'];   ?></td>
                            <td>
                                <a href="form_booking.php?id=<?= $data['id']; ?>" class="btn btn-info">Booking</a>
                                <a href="" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus <?= $data['kode_blok'] ?>?'">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </section>
    </div>
</body>

</html>