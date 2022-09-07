<?php
session_start();
 if(isset($_SESSION['nama'])){ // jika session nama ada
    echo "<h1> ini Halaman pengguna </h1>";
    echo $_SESSION["nama"];
 }