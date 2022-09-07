<?php
 session_start();
 $nama = $_POST['nama'];
 $password = $_POST["password"];
 
 $koneksi = new PDO('mysql:host=localhost;dbname=puskesmas','root','');

 $query = $koneksi->query("select * from pengguna where nama='$nama'AND password='$password'");

if($query->rowCount() > 0){
    $_SESSION["nama"] = $_POST["nama"];
    $_SESSION["password"] = $_POST["password"];
    header("location:beranda.php");
    
}else{
    header("location:form.php");
}