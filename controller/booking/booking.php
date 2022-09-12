<?php
    require('../../database/db.php');

    if (isset($_POST['booking'])) {
        $nama_konsumen = mysqli_escape_string($db, $_POST['nama_konsumen']);
        $alamat = mysqli_escape_string($db, $_POST['alamat']);
        $no_handphone = mysqli_escape_string($db, $_POST['no_handphone']);
        $uang_booking = mysqli_escape_string($db, $_POST['uang_booking']);
        $kode_blok = mysqli_escape_string($db, $_POST['kode_blok']);
     
     
        $insert = mysqli_query($db, "INSERT INTO booking VALUES(NULL, '$nama_konsumen', '$alamat', '$no_handphone', '$uang_booking', '$kode_blok')");
     
        if($insert){
            echo "<script>
                alert('Rumah berhasil di booking');
                document.location='../../index.php';
                </script>";
        }else{
            header('Location: ../../pages/booking/form_booking.php?status=failed');
        }

      }

?>