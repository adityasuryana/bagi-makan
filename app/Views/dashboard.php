<?php 
use Myth\Auth\Authentication\Authentication;
use Config\Services;

$authentication = Services::authentication();

$username = '';

if ($authentication->check()) {
    $user = $authentication->user();

    $username = $user->username;
}


echo view('_partials/header'); ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="row d-contents">
                    <div class="col text-center">
                        <a class="navbar-brand head-title fw-s-bold mx-auto">bagi makan</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row mb-3 mt-3">
                <h3 class="fw-s-bold fs-25 mb-3">Home</h3>
                <div id="" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner object-fit-cover ">
                        <div class="carousel-item active">
                            <img src="../public/assets/img/1.jpg" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/assets/img/1.jpg" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/assets/img/1.jpg" class="d-block w-100 img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <h3 class="fw-s-bold fs-25 mb-3">Information</h3>
                <div class="col-6 col-sm-6">
                    <div class="card p-3 h-100">
                        <h4 class="sub-title mb-3">info 1</h4>
                    </div>
                </div>

                <div class="col-6 col-sm-6">
                    <div class="card p-3 h-100">
                        <h4 class="sub-title mb-3">info 2</h4>
                    </div>
                </div>

                <div class="col-6 col-sm-6">
                    <div class="card p-3 h-100">
                        <h4 class="sub-title mb-3">info 3</h4>
                    </div>
                </div>

                <div class="col-6 col-sm-6">
                    <div class="card p-3 h-100">
                        <h4 class="sub-title mb-3">info 4</h4>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg fixed-bottom bg-white p-3">
            <div class="container justify-content-center">
                <ul class="navbar-nav navbar-bottom d-contents">
                    <li class="nav-item text-center mx-4">
                        <a class="nav-link d-grid py-0 active" href="<?= url_to('/') ?>"><i class="fa-solid fa-house mb-2"></i>Home</a>
                    </li>
                    <li class="nav-item text-center mx-4">
                        <a class="nav-link d-grid py-0" href="<?php echo base_url('donasi'); ?>"><i class="fa-solid fa-hand-holding-heart mb-2"></i>Donasi</a>
                    </li>
                    <li class="nav-item text-center mx-4">
                        <a class="nav-link d-grid py-0" href="<?php echo base_url('profil'); ?>"><i class="fa-solid fa-circle-user mb-2"></i>Profil</a>
                    </li>
                  </ul>
            </div>
        </nav>

        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script src="https://kit.fontawesome.com/dc9826e1b1.js" crossorigin="anonymous"></script>



