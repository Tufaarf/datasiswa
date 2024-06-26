<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data</title>
</head>
<body>
    <!-- navbar start -->
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
                        <a class="nav-link" aria-current="page" href="table.php">Data</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="table.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- carousel start -->
    <main class="container-fluid py-3">
        <div class="row">
            <div class="col"></div>
            <div class="col-9">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="assets/img/carousel1.jpg" class="d-block w-100" alt="placeholder 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ini Carousel</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequuntur vel provident laboriosam quidem tempore, eligendi quia cupiditate alias, voluptatum, praesentium ex? Iure praesentium veniam modi quas dignissimos. Eum, fugiat!</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/img/carousel2.jpg" class="d-block w-100" alt="placeholder 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ini Carousel</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error fuga et at dolores numquam accusantium impedit recusandae itaque reprehenderit, nam cumque quasi odio labore neque sit vero explicabo nemo consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/carousel3.jpg" class="d-block w-100" alt="placeholder 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ini Carousel</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus neque perferendis, distinctio eius culpa possimus quasi provident dignissimos iste aperiam doloribus, nulla at! Perspiciatis ab maxime blanditiis quidem quod repellendus.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </main>
    <!-- carousel end -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
