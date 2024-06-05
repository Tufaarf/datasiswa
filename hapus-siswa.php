<?php
    session_start();
    require_once 'config.php';
    if(!isset($_POST['id'])){
        header("Location: table.php");
        exit();
    }

    $sql = "DELETE FROM tb_student WHERE id = ".$_POST["id"];
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Data Terhapus";
    }else{
        $_SESSION['fail'] = "Gagal menghapus";
    }

    header("Location: table.php");
    exit();
?>