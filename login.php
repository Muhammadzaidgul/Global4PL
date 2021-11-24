<?php
session_start();
include 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                      <h3>Admin Area</h3>
                    <img class="logo-abbr" src="./images/G4PL-newlogo01.png" alt="">
                    <br>
                    <br>
                    
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" name="username" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" required class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      
                      <input type="submit" name="btnsub" class="btn btn-primary btn-block">
                    </div>
                    <hr>
                   <!--  <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>

                  <hr>

                  <div class="text-center">
                    <?php
                  
                    if(isset($_POST['btnsub']))
                    {
                      $name= mysqli_real_escape_string ($conn,$_POST['username']);
                      $pass= mysqli_real_escape_string ($conn,md5($_POST['password']));

                      $sql = "SELECT * FROM tb_user WHERE username = '$name' and password ='$pass' and active='1'";
                      $select = mysqli_query($conn, $sql);
                        $count=mysqli_num_rows($select);
                          if ($count == 1)
                           {
                              date_default_timezone_set("Asia/Karachi");

                              $checklogin = 1;
                              $row=mysqli_fetch_array($select);
                              $u_id = $row['id'];
                              $_SESSION['user']=$row['id'];
                              $_SESSION['username']=$row['username'];
                              $_SESSION['usertype']=$row['user_type'];
                              
                              $hostname = $_SERVER['REMOTE_ADDR'];
                              $agent = $_SERVER['HTTP_USER_AGENT'];
                              $_SESSION['timestamp']=time();
                              $datetim =date("Y-m-d H:i:sa");
                              
                              // Save login activity in log
                              // if($user_role == 3){
                              //     $db_que = mysqli_query($conn,"insert into login_activity(user_id,pc_ip,browser,login_status,activity_time) values('$std_id','$hostname','$agent','Login','$datetim')");
                              // }
                               
                               
                              if($_SESSION['usertype']==1) //Admin user
                              {
                                 echo "<script>window.open('shipping-data.php','_self')</script>";
                              }
                              else if($_SESSION['usertype']==2) //client user
                              {
                                 echo "<script>window.open('form.php','_self')</script>";
                              }
                              else
                              {
                               echo "<script>window.open('login.php','_self')</script>";
                              }
                           }
                           else
                           {

                            echo "<a class='font-weight-bold small' style='color:red;'>Username or Password is invalid</a>";               
                            
                           }
                    }
                    ?>
                    
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>