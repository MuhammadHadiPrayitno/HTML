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
    $_SESSION ['pesan_kesalahan']="Login Gagal";
    header ("Location: index.php");
    exit;
}else{
    if (!isset($_SESSION['login_count'])) {
        $_SESSION['login_count'] = 0;
    }

    $_SESSION['login_count']++;
    $_SESSION['is_logged_in']= true;
    $_SESSION['username'] = $username;
    $_SESSION['is_logged_in'] = true;
    header ("Location: dashboard/index.php");
    exit;
}


if( $password == $password_valid &&
     $username == $username_valid)

echo "Selamat Datang" . $username;
echo "<br/>";
echo "Password anda" . $password;

if ($login_sukses) {
   
    $user_id = $row['id']; 
    $query_count = "UPDATE user SET login_count = login_count + 1 WHERE id = '$user_id'";
    mysqli_query($koneksi, $query_count);

    
    $_SESSION['username'] = $row['username'];
    $_SESSION['login_count'] = $row['login_count'] + 1; 

    header("Location: index.php");
    exit();
}