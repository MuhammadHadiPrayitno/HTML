<?php

require_once "database.php";
require_once "user.php";

$username = $_POST["username"];
$email = $_POST["email"];
$asal = $_POST["asal"];
$password = $_POST["password"];
$password_ulang = $_POST["password_ulang"];

if(isset($_POST["setuju"])){
    echo"Anda telah menyatujui form";

        if($password!= $password_ulang){
            echo "password tidak sama";
            die;
        }

        $database = new Database();
        $koneksi_db = $database->koneksi();

        $user = new user ($koneksi_db);
        $user->create($username, $email, $asal, $password);
}else{
    echo"Anda menyetujui form";
}
