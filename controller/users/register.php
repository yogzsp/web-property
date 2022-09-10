<?php
 require('../../database/db.php');

 if (isset($_POST['register'])) {
   $fullname = mysqli_escape_string($db, $_POST['fullname']);
   $username = mysqli_escape_string($db, $_POST['username']);
   $password = mysqli_escape_string($db, $_POST['password']);
   $password_hash = password_hash($password, PASSWORD_DEFAULT);
   $level = mysqli_escape_string($db, $_POST['level']);


     //  Check duplicate users
    $get = mysqli_query($db, "SELECT * FROM users WHERE fullname='".$fullname."'");

    if(mysqli_num_rows($get) > 0){
         echo "<script>
                    alert('Akun telah terdaptar, gunakan akun lain');
                    document.location='../../pages/users/register.php';
                </script>";
    }else{
        $insert = mysqli_query($db, "INSERT INTO users VALUES(NULL, '$fullname', '$username', '$password_hash', '$level')");

        if($insert){
            header('Location: ../../pages/users/login.php?status=success');
        }else{
            header('Location: ../../pages/users/register.php?status=failed');
        }
    }
 }
?>