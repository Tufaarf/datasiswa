<?php 
    //untuk koneksi
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_studentdata';
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: <br>" . mysqli_connect_error());
    }
 ?>