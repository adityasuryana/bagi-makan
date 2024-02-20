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
                        <form method="POST" action="<?php echo base_url('donasi/simpan'); ?>" >
                            <div class="">
                                <input type="text" name="id" hidden>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Kamu</label>
                                <input type="text" name="alamat" class="form-control bg-white" id="alamat" value="" required>
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
                                <input type="text" name="nama_makanan" class="form-control bg-white" id="makanan" value="" required>
                            </div>

                            <div class="mb-4">
                                <label for="jenis" class="form-label">Jenis Makanan</label>
                                <input type="text" name="jenis_makanan" class="form-control bg-white" id="jenis" value="" required>
                            </div>

                            <!-- <div class="d-grid text-center">
                                <img class="mb-3" id="ajaxImgUpload" alt="Preview Image" src="https://via.placeholder.com/150" />
                            </div>
                            
                            <div class="mb-3">
                                <input type="file" name="file" multiple="true" id="finput" onchange="onFileUpload(this);" class="form-control form-control-lg"  accept="image/*">
                            </div> -->
                    
                            <button type="submit" id="submit" class="black-button fw-s-bold w-100 mt-3">Kirim</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar sticky-bottom bg-white p-3">
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
        <script>
        function onFileUpload(input, id) {
            id = id || '#ajaxImgUpload';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(id).attr('src', e.target.result).width(300)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $('#upload_image_form').on('submit', function (e) {
                $('.uploadBtn').html('Uploading ...');
                $('.uploadBtn').prop('Disabled');
                e.preventDefault();
                if ($('#file').val() == '') {
                    alert("Choose File");
                    $('.uploadBtn').html('Upload');
                    $('.uploadBtn').prop('enabled');
                    document.getElementById("upload_image_form").reset();
                } else {
                    $.ajax({
                        url: "<?php echo base_url(); ?>/AjaxFileUpload/upload",
                        method: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        success: function (res) {
                            console.log(res.success);
                            if (res.success == true) {
                                $('#ajaxImgUpload').attr('src', 'https://via.placeholder.com/300');
                                $('#alertMsg').html(res.msg);
                                $('#alertMessage').show();
                            } else if (res.success == false) {
                                $('#alertMsg').html(res.msg);
                                $('#alertMessage').show();
                            }
                            setTimeout(function () {
                                $('#alertMsg').html('');
                                $('#alertMessage').hide();
                            }, 4000);
                            $('.uploadBtn').html('Upload');
                            $('.uploadBtn').prop('Enabled');
                            document.getElementById("upload_image_form").reset();
                        }
                    });
                }
            });
        });
    </script>
        
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script src="https://kit.fontawesome.com/dc9826e1b1.js" crossorigin="anonymous"></script>

