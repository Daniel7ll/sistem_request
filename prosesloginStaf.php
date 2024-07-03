<?php
session_start();
include('cruduser.php');
$username = $_POST['username'];
$password = $_POST['password'];

if(otentik($username, $password)){
    // set variabel sesi 
    $_SESSION['username'] = $username;
    $dataUser = array(); //deklarasi var array
    $dataUser = cariUserDariUsername($username); //mencari user (nama)
    $_SESSION['namauser'] = $dataUser['nama']; 

    header("Location: MahasiswaMVCDaniel");
}else{
    header("Location: login.php?error");
}
?>