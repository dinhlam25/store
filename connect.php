<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "info";
    // $conn = mysqli_connect($servername,$username,$password,$database);
    $conn = new mysqli('localhost','root','','info');

    if (!$conn) {
        die("Connection failed: " . $conn -> connect_error);
      }
    else
        echo "connect success! ". "<br>" ;
function execute($query)
{
  $conn = new mysqli('localhost','root','','info');
  mysqli_set_charset($conn,"utf8");
  mysqli_query($conn,$query);
  $conn->close();
}
function executeResult($query,)
{
  $conn = new mysqli('localhost','root','','info');
  mysqli_set_charset($conn,"utf8");
  $result = mysqli_query($conn,$query);
  $list = [];
    while ($row = mysqli_fetch_array($result, 1)){
      $list[] = $row;
    }
  
  $conn->close();
  return $list;
}
function authenToken(){
  if(isset($_COOKIE['token'])){
    $token = $_COOKIE['token'];
    if(empty($token)){
      return null;
    }
  } else {
    return null;
  }
  $query = "SELECT users.mail,tokens.email,token FROM users,tokens WHERE users.mail = tokens.email AND token = '$token'";
  $list = [];
  $result = executeResult($query);
  $list = $result;
  if($list != null && count($list) > 0 ){
    return $list[0];
  } else {
    return null;
  }
}

?>