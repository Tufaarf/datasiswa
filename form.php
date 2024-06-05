<?php
require_once 'config.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $class = $_POST["class"];
    $insta = $_POST["insta"];
    $address = $_POST["address"];

    $sql = "INSERT INTO tb_student (name, email, age, class, insta, address) VALUES ('$name', '$email', '$age', '$class', '$insta', '$address')";
    if ($conn->query($sql) === TRUE) {
        $message = '<div class="alert alert-success" role="alert">
                        Data berhasil di tambah
                    </div>';
    } else {
        $message = '<div class="alert alert-danger" role="alert">
                        Gagal menambah data
                    </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data siswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
                SMK NEGERI 1 PROBOLINGGO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="form.php">Data</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="form.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="container-fluid py-3">
        <div class="row">
            <div class="col"></div>
            <div class="col-9">
                <?php if (isset($message)) echo $message; ?>
                <div class="card">
                    <div class="card-header">
                        Input Data Siswa
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Umur</label>
                                <input type="text" class="form-control" id="age" name="age">
                            </div>
                            <div class="mb-3">
                                <label for="class" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" id="class" name="class">
                            </div>
                            <div class="mb-3">
                                <label for="insta" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="insta" name="insta">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
