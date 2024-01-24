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
                <h2 class="head-title fw-s-bold mb-4 text-center">bagi makan</h2>
                
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="" required>
                            </div>
                            
                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>

                            <input type="submit" id="submit" class="black-button fw-s-bold w-100 mt-3" value="Daftar">
                            
                            <div class="text-center mt-3">
                                <a class="link" href="<?php echo base_url('/'); ?>">Kembali</a>
                            </div>
                            
                        </form>
                </div>
                

            </div>
        </div>
    </div>

<?php
echo view('_partials/footer');
?>