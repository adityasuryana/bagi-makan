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
                    <h3 class="fw-s-bold fs-25 mb-3">Donasi</h3>
                </div>
                
                <div class="col">
                    <div class="card bg-gray p-3 h-100">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Kamu</label>
                                <input type="text" name="alamat" class="form-control bg-white" id="alamt" value="" required>
                            </div>
                            
                            <div class="mb-2">
                                <label for="tujuan" class="form-label">Tujuan</label>
                                <input type="text" name="tujuan" class="form-control bg-white" id="tujuan" value="" required>
                            </div>

                            <div class="mb-2">
                                <label for="penerima" class="form-label">Nama Penerima</label>
                                <input type="text" name="penerima" class="form-control bg-white" id="penerima" value="" required>
                            </div>

                            <div class="mb-2">
                                <label for="makanan" class="form-label">Nama Makanan</label>
                                <input type="text" name="makanan" class="form-control bg-white" id="makanan" value="" required>
                            </div>

                            <div class="mb-2">
                                <label for="jenis" class="form-label">Jenis Makanan</label>
                                <input type="text" name="jenis" class="form-control bg-white" id="jenis" value="" required>
                            </div>

                            <input type="submit" id="submit" class="black-button fw-s-bold w-100 mt-3" value="Kirim">
                            
                        </form>
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
                        <a class="nav-link d-grid py-0 active" href="<?php echo base_url('donasi'); ?>"><i class="fa-solid fa-hand-holding-heart mb-2"></i>Donasi</a>
                    </li>
                    <li class="nav-item text-center mx-4">
                        <a class="nav-link d-grid py-0 " href="<?php echo base_url('profil'); ?>"><i class="fa-solid fa-circle-user mb-2"></i>Profil</a>
                    </li>
                  </ul>
            </div>
        </nav>

        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script src="https://kit.fontawesome.com/dc9826e1b1.js" crossorigin="anonymous"></script>

