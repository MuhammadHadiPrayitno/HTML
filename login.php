<?php

session_start();

require_once("database.php");
require_once("user.php");

$username = $_POST['input_username'];
$password = $_POST['input_password'];

$db = new Database();
$conn = $db->koneksi();
$user = new User($conn);

$ditemukan = $user->login ($username, $password);

if($ditemukan == false){
    $_SESSION ['pesan_kesalahan']="Login gagal";
    header ("Location: index.html");
    exit;
}else{
    $_SESSION['is_logged_in'] = true;
    header ("Location: dashboard/index.php");
    exit;
}

$_SESSION['is_logged_in'] = true;
$_SESSION['username'] = $username;
header("Location: dashboard/index.php");
exit();

$username = $_POST["input_username"];
$password = $_POST["input_password"];

//$username_valid = "hadi";
//$password_valid = "12345678";

if($username == $username_valid && $password == $password_valid){
    echo "Selamat Datang" . $username;
}else{
    echo "username salah";
}




