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
            <h2 class="head-title fw-s-bold text-center">bagi makan</h2>
            
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12">
            <div class="d-grid w-100 position-absolute top-90 start-50 translate-middle p-3">
                <a class="black-button fw-s-bold mb-2" href="<?php echo base_url('/login'); ?>">Masuk</a>
                <a class="white-button fw-s-bold" href="<?php echo base_url('/register'); ?>">Daftar</a>
            </div>
        </div>
    </div>

<?php
echo view('_partials/footer');
?>