<?php
session_start();
//$otp=$_SESSION['OTP'];
//echo $otp;
//
//
//if(isset($_POST['otp_v'])){
//    $input_otp=$_POST['user_otp'];
//    echo $input_otp;
//    
//    if($otp == $input_otp){
//        
//    }
//    else{
////        header("otp.php?s=1");
////        exit();
//    }
//    
//    
//}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Question Paper | </b>Generator</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="#" method="post">
     <h5>Enter your four digit OTP to verify!</h5>
      <div class="form-group has-feedback">
       
        <input type="text" class="form-control" placeholder="0-0-0-0" name="user_otp">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
<!--
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="user_password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
-->
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="otp_v">Submit</button>
        </div>
        <?php
//                        session_start();
          require_once("includes/db.php");
          global $connection;
                        $otp=$_SESSION['OTP'];
//                        echo $otp;


                        if(isset($_POST['otp_v'])){
                            $input_otp=$_POST['user_otp'];
//                            echo $input_otp;

                            if($otp == $input_otp){
//                                    echo $_SESSION['email'];
                                $email_id=$_SESSION['email'];
                                $query="select student_id from student where student_email='$email_id'";
                                $result=mysqli_query($connection,$query);
                                $row=mysqli_fetch_assoc($result);
                                $id=$row['student_id'];
//                                echo $id;
                                $_SESSION['student_id']=$id;
                                
                                header("Location: Student/student_confirm_password.php");
                                exit();
                            }
                            else{
                                echo "OTP didnot match";
                            }


                        }
        ?>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

<!--    <a href="forget_password.php">I forgot my password</a><br>-->
<!--    <a href="register.html" class="text-center">Register a new membership</a>-->
   <?php
//      if(isset($_GET['q'])){
//          if($_GET['q'] == '1'){
//              
//          
//    echo "<p style='color:red; padding-top=50px ;text-align:center'>Invalid user Eamil or Password!!!</p>";
//          }
//      }
  ?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<!--<script src="../../bower_components/jquery/dist/jquery.min.js"></script>-->
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<!--<script src="../../plugins/iCheck/icheck.min.js"></script>-->


<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
</body>
</html>