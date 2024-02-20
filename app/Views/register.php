<?php 
helper('url');
echo view('_partials/header');
$session = session();
?>
<body class="bg-green">
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-12 position-absolute top-50 start-50 translate-middle">
            <div class="card bg-white m-2 p-4">
                <h2 class="head-title fw-s-bold mb-4 text-center">bagi makan</h2>
                <?= view('Myth\Auth\Views\_message_block') ?>
                        <form method="POST" action="<?= url_to('register') ?>">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= old('email') ?>" required>
                            </div>    
                        
                            <div class="mb-3">
                                <label for="username" class="form-label">Nama</label>
                                <input type="text" name="username" class="form-control" id="username" value="<?= old('username') ?>" required>
                            </div>

                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
                            </div>

                            <div class="mb-2">
                                <label for="pass_confirm" class="form-label">Ulangi Password</label>
                                <input type="password" name="pass_confirm" class="form-control" id="password" autocomplete="off" required>
                            </div>

                            <button type="submit" class="black-button fw-s-bold w-100 mt-3">Daftar</button>
                            
                            <div class="text-center mt-3">
                                <a class="link" href="<?= base_url('/welcome') ?>">Kembali</a>
                            </div>
                            
                        </form>
                </div>
                

            </div>
        </div>
    </div>

<?php
echo view('_partials/footer');
?>