<?php

//mencari data berdasra username
// jika ada, hasil array dengan indeks berupa name field 
// jika tidak ada hasil berupa nilai null 
function cariUserDariUsername($username){
    $koneksi = mysqli_connect("localhost","root","","kampus_danielr1tic");
    $sql = "select * from staf where username='$username'";
    $hasil = mysqli_query($koneksi, $sql); 
    if(mysqli_num_rows($hasil)>0){
        $baris=mysqli_fetch_assoc($hasil); 
        $data['username']=$baris['username'];
        $data['password']=$baris['password'];
        $data['nama']=$baris['nama']; 
        mysqli_close($koneksi);
        return $data;
    }else{ 
        mysqli_close($koneksi);
        return null;
    }
}

// memeriksa otentikasi user berdasar username dan password 
// jika user dinyatakan otentik, hasil fungsi = true 
// sebaliknya hasil fungsi = false 
function otentik ($username, $password){
    $dataUser = array();
    $pwdmd5 = md5($password);
    $dataUser = cariUserDariUsername($username);
        if($dataUser != null){
            if($pwdmd5==$dataUser['password']){
                return true; 
            }else{return false;}
        }else {
            return false; 
        }
    }
?>