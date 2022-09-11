<?php
 session_start();

 require('../../database/db.php');

 if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];


     //  Check duplicate users
     $result = mysqli_query($db, "SELECT * FROM users WHERE username='$username'");

     if(mysqli_num_rows($result) === 1){
         $row = mysqli_fetch_assoc($result);
         if(password_verify($password, $row["password"])){

             if($row['level'] == 'admin'){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header('Location: ../../pages/admin/admin.php');
             }else if($row['level'] == 'customer'){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header('Location: ../../index.php');
             }
         }else{
             header('Location: ../../pages/users/login.php?status=wrong');
         }
     }else{
         header('Location: ../../pages/users/login.php?status=failed');
         exit;
         
     }
 }
?>