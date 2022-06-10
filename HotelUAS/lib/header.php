<?php
    session_start();
    if(!isset($_SESSION['username'])){ 
        header("location:login.php");
        exit;
    }
?>
<?php
    require_once 'connect.php';
?>

<html>
<head>
	<title>Kurnia Hotel</title>
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
</head>
<body>
</html>