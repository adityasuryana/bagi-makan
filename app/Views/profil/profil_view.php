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
                <div class="mb-3">
                    <h3 class="fw-s-bold fs-25 mb-3">Profil</h3>
                </div>
                
                <div class="col">
                    <div class="card bg-gray p-3 h-100">
                        <div class="w-100 text-center">
                            <img src="" alt="">
                            <p class="sub-title fw-s-bold"><?php echo $username; ?></p>
                        </div>
                        
                        <a class="link fw-s-bold mb-2" href=""><i class="fa-solid fa-edit me-2"></i>Edit Profil</a>
                        <a class="link fw-s-bold mb-2" href="<?php echo base_url('riwayat'); ?>"><i class="fa-solid fa-history me-2"></i>Riwayat Donasi</a>
                        <a class="link fw-s-bold" href="<?= base_url('/logout') ?>"><i class="fa-solid fa-sign-out-alt me-2"></i>Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <nav class="navbar navbar-expand-lg fixed-bottom bg-white p-3">
            <div class="container justify-content-center">
                <ul class="navbar-nav navbar-bottom d-contents">
                    <li class="nav-item text-center mx-4">
                        <a class="nav-link d-grid py-0" href="<?php echo base_url('/'); ?>"><i class="fa-solid fa-house mb-2"></i>Home</a>
                    </li>
                    <li class="nav-item text-center mx-4">
                        <a class="nav-link d-grid py-0" href="<?php echo base_url('donasi'); ?>"><i class="fa-solid fa-hand-holding-heart mb-2"></i>Donasi</a>
                    </li>
                    <li class="nav-item text-center mx-4">
                        <a class="nav-link d-grid py-0 active" href="<?php echo base_url('profil'); ?>"><i class="fa-solid fa-circle-user mb-2"></i>Profil</a>
                    </li>
                  </ul>
            </div>
        </nav>

        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script src="https://kit.fontawesome.com/dc9826e1b1.js" crossorigin="anonymous"></script>

