<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

if($user == "admin" and $pass = "s"){
echo "Anda berhasil login";
echo "<br>";
echo "Username : ". $user;
echo "<br>";
echo "Password : ". $pass;
echo "<br>";


echo "<a href='logout.php'>logout</a>";
}else{
    echo "Maaf, username dan kata sandi anda tidak cocok";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}

//echo "Anda berhasil login";
//echo "<br>";
//echo "Username : ". $_SESSION['username'];
//echo "<br>";
//echo "Password : ". $_SESSION['password'];
//echo "<br>";
?>