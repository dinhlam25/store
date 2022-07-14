<?php
    include_once "connect.php";
    $mail = $password = $cpassword =  '';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
     
        $mail = $_POST['emaildk'];
        $password = md5($_POST['passdk']);
        $cpassword = md5($_POST['cpassdk']);

        
        $query = "SELECT mail FROM users";
        $list = executeResult($query);
        $isEmail= true;
        for( $i = 0; $i<count($list) ; $i++){
            if($mail == $list[$i]['mail']){
                echo "Email da dc su dung";
                $isEmail = false;
                break;
            }
        }
        if($isEmail){

            if($password == $cpassword){
                $query = "INSERT INTO users(mail,pass) Values('$mail','$password')";
                execute($query);
                header("Location: login.php");
                die();
            }
            else{
                header("Location: index.php");
                echo "Mat khau nhap lai sai";
                die();
            }     
        }
    }
  
?>
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
    <title>Sign In</title>
</head>
<body>
    <div class="row mx-5">
      <h1>SIGN UP</h1>
      <div style="border: 1px;">
        <form method="post" action="">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="emaildk" type="email" class="form-control mb-3"  aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="passdk" type="password" class="form-control mb-3"  placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input name="cpassdk" type="password" class="form-control"  placeholder="Confirm Password" required>
            </div>
            <br><a href="./login.php">I had account</a><br>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
    </div>
 
</body>
</html>