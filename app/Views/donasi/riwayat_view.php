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
                    <h3 class="fw-s-bold fs-25 mb-3">Riwayat Donasi</h3>
                </div>
                
                <div class="col">
                    <div class="card bg-gray p-3 h-100">
                    <table id="table" class="w-100">
                            <thead>
                                <tr>
                                    <th>Alamat</th>
                                    <th>Tujuan</th>
                                    <th>Penerima</th>
                                    <th>Nama Makanan</th>
                                    <th>Jenis Makanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($donasi as $key => $row) {  ?>
                                        <tr class="mt-1 mb-1">
                                            <td><?php echo $row['alamat']; ?></td>
                                            <td><?php echo $row['tujuan']; ?></td>
                                            <td><?php echo $row['penerima']; ?></td>
                                            <td><?php echo $row['nama_makanan']; ?></td>
                                            <td><?php echo $row['jenis_makanan']; ?></td>
                                        </tr>
                                                         
                                <?php }?>
                            </tbody>
                        </table>
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
        <script type="text/javascript">
			$(document).ready( function () {
			$('#table').DataTable({
				pageLength: 5,
				lengthMenu: [[5, 10, 20, -1], [5, 10, 15, 'All']],
				paging: true,
				searching: false,
                scrollX: true,
				ordering: true,
				stateSave: true,
				language: {
					search: '',
					searchPlaceholder: "Search",
					"lengthMenu": "Show _MENU_" },
			});
		} );
	    </script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script src="https://kit.fontawesome.com/dc9826e1b1.js" crossorigin="anonymous"></script>

