<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Aplikasi Inventaris Berbasis Web</title>
</head>

<body>
    <figure class="text-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>DAFTAR INVENTARIS BARANG</h1>
                <h1>KANTOR SERBA ADA</h1>
            </div>
        </div>
    </figure>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">RESPONSI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="output.php">Daftar Inventaris</a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    List per kategori
                                </a>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">bangunan</a></li>
                                    <li><a class="dropdown-item" href="#">Kendaraan</a></li>
                                    <li><a class="dropdown-item" href="#">Alat tulis kantor</a></li>
                                    <li><a class="dropdown-item" href="#">Elektronik</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </ul>


            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-end">
                <a class="btn btn-primary" href="logout/index.php">Logout</a>
            </div>
        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center fixed-bottom bg-primary">
    <p style="margin: 0">Copyright ?? Rahmadi</p>
</nav>

</html>