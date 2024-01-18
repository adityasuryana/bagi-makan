<!-- 
    Aditya Suryana
    IF8 - 10121297
    2024
 -->
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
                <h2 class="head-title fw-s-bold mb-5 text-center">bagi makan</h2>
                
                    <?php
                        if ($session->getFlashdata('error')) {
                            echo "<div class='alert alert-danger alert-dismissible fade show mb-4 border-0'>{$session->getFlashdata('error')}
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>";
                        }
                    ?>
                        <form method="POST" action="<?= base_url('/processLogin') ?>">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= old('email') ?>" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <input type="submit" id="submit" class="black-button fw-s-bold w-100 mt-3" value="Login">
                            
                            <div class="text-center mt-3">
                                <a class="link" href="">Lupa password?</a>
                            </div>
                        </form>
                </div>
                <a class="link m-2 mt-3" href="">Belum punya akun? Daftar</a>

            </div>
        </div>
    </div>

<?php
echo view('_partials/footer');
?>