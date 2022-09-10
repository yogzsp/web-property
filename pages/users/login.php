<?php
    include '../../controller/users/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../assets/css/commons/index.css" rel="stylesheet">

</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="../../assets/img/commons/home.png"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Home Property</h4>
                      </div>
      
                      <form action="../../controller/users/login.php" method="post" enctype="multipart/form-data">

                        <?php if(isset($_GET['status'])): ?>
                            <p style="text-align: center;font-weight: bold;font-size: 20px;" class="text-danger">
                              <?php
                                if($_GET['status'] == 'failed'){
                                  echo "Cannot login! please check your username and password";
                                }else if($_GET['status'] == 'wrong'){
                                  echo "Username or Password wrong";
                                }
                                            
                              ?>
                            </p>
                        <?php endif; ?>
                        <p>Please login to your account</p>

      
                        <div class="form-outline mb-4">
                          <label 
                            class="form-label" 
                            for="username">
                            Username
                          </label>
                          <input 
                            type="text" 
                            id="username" 
                            name="username"
                            class="form-control"
                            required
                            placeholder="Masukan Username" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <label 
                            class="form-label" 
                            for="password">
                            Password
                          </label>
                          <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control" 
                            required
                            placeholder="Masukan Password" />
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button 
                            class="btn btn-primary 
                            btn-block fa-lg 
                            gradient-custom-2 mb-3" 
                            type="submit"
                            name="login"
                            >
                            Login
                          </button>
                          <a 
                            class="text-muted" 
                            href="#!">
                            Forgot password?
                          </a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2" style="margin-right: 5px;">Don't have an account?</p>
                          <a href="./register.php" type="button" class="btn btn-outline-danger">Create new</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">MUARA ALAM</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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