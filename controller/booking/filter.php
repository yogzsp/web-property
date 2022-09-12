<?php
include('../../database/db.php');
if(isset($_POST['pilih'])) {

    $blok = $_GET['blok'];
    $blokA = mysqli_query($db, "SELECT * FROM detail perumahan WHERE blok = '$blok' ");

    var_dump($blokA);

}

?>