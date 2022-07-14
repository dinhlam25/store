<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="row mx-5">
      <h1>LOGIN</h1>
      <div style="border: 1px;">
        <form method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="emaildn" type="email" class="form-control mb-3"  aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="passdn" type="password" class="form-control mb-3"  placeholder="Password" required>
            </div>
            <br><a href="./index.php">Sign up</a><br>        
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
</body>
</html>
<?php
    include_once "connect.php";
    $email = $pass = $thongbaodn ="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email = $_POST['emaildn'];
      $pass = md5($_POST['passdn']);


    // xac nhan dang nhap , set va insert cookie cho token
    $query = "SELECT * FROM users WHERE mail = '" .$email. "' AND pass ='". $pass ."'";
    $list = []; 
    $list = executeResult($query);
    if(count($list) == 1){
      $token = md5($email . time());
      setcookie('token',$token,time() + 24*60*60 ,'/');
      $time_start = date("Y-m-d h:s:i");
      $query = "INSERT INTO tokens(email,token,time_start) Values('$email','$token','$time_start')";
      execute($query);
        header("Location: welcome.php");
    }
    else {
      $thongbaodn = "Tai khoan hoac mat khau sai ! ";
      echo $thongbaodn;
      }
    }

    $user = authenToken();
    if($user != null){
      header("Location: welcome.php");
      die();
    }

?>