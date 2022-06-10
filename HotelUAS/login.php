<?php
 session_start();
  if (isset($_POST['submit'])) {
    require_once('lib/connect.php');

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $sql = "SELECT *  FROM users WHERE username = '$username' and password = '$password'";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_num_rows($query);
    
  if($row > 0) {
    $_SESSION['username'] = $username;

    header("location:index.php");
    exit;
  } 
}
?>
<html>

<head>
  <title>Login</title>
  <style>

    .form {
      position: relative;
      z-index: 1;
      background: #FFFFFF;
      max-width: 360px;
      margin: 0 auto 100px;
      padding: 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }

    .form button {
      text-transform: uppercase;
      background: #AFEEEE;
      width: 100%;
      padding: 15px;
      border: 0;
      color: black;
      font-size: 16px;
    }

    body {
      background: #AFEEEE;
    }
  </style>
</head>

<body>
  <div><br/>
  <h1><center>Selamat Datang </h1>
    <h3><center>Sistem Informasi Hotel Kurnia dibangun untuk memudahkan para pengunjung <br>
      hotel dalam proses pemesanan kamar atau pengecekan kesediaan kamar</h3><br/>
    <div>
      <form action="" method="POST">
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <button type="submit" name="submit">login</button>
      </form>
    </div>
  </div>
</body>
</html>