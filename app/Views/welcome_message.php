<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Glaria</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="<?= base_url('bootstrap-5.0.2/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/css/layout.css') ?>" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container-fluid">
            <img src="<?= base_url('/img/Icon1.png') ?>" alt="Deskripsi gambar" width="45" height="45">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" <?= base_url('/tambah') ?> ">Tambah</a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" style="border-radius: 50px;" placeholder="Search" aria-label="Search">
                        </form>
                    </li>
                </ul>
                <a href="<?= base_url('/profile') ?>" style="color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="40" height="40" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </a>


                <a class="nav-link " href="#">Logout</a>
            </div>
        </div>
    </nav>


    <div class="d1">
        <div class="container">

            <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Home</h1>

            <hr class="mt-2 mb-5">

            <div class="row text-center text-lg-start">

                <div class="col-lg-3 col-md-4 col-6">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="img-fluid rounded " src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded " src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid rounded" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-md-6">
                            <img class="img-fluid rounded mb-3" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url('/img/seele.jpeg') ?>" alt="Deskripsi gambar" width="40" height="40" class="me-3  rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 me-3" width="35" height="35">
                                            <path d="M13 4.5a2.5 2.5 0 1 1 .702 1.737L6.97 9.604a2.518 2.518 0 0 1 0 .792l6.733 3.367a2.5 2.5 0 1 1-.671 1.341l-6.733-3.367a2.5 2.5 0 1 1 0-3.475l6.733-3.366A2.52 2.52 0 0 1 13 4.5Z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="40" height="40" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                        </svg>

                                    </div>
                                    <button type="button" class="btn btn-outline" style="border-radius: 50px;">Simpan</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque. Ut diam quam, semper iaculis condimentum ac, vestibulum eu nisl.</p>
                                    <h6>Komentar</h6>
                                    <hr>

                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="10" height="10" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer>

        </footer>

        <script src="<?= base_url('bootstrap-5.0.2/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('bootstrap-5.0.2/js/tiny-slider.js') ?>"></script>
        <script src="<?= base_url('bootstrap-5.0.2/js/custom.js') ?>"></script>
</body>

</html>