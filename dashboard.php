<?php
require_once('includes/init.php');
$page = "Dashboard";
require_once('template/header.php');
?>


<div class="mb-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Sistem Informasi Pendukung Keputusan Rumah Makan Mahasiswa Universitas Andalas</h1>
        <div class="sidebar-brand-text mx-3"><img src="assets/img/sirumma.png" style="width: 200px;" alt="RumahMakan"></div>
    </div>

    <!-- Content Row -->
    <div class="alert alert-success ">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="position: relative; top: -2px;" >×</button>
        Selamat datang di Sistem Informasi Pendukung Keputusan Rumah Makan Mahasiswa Universitas Andalas !
    </div>

    <div class="row">
        <?php
        $query = mysqli_query($koneksi, "SELECT COUNT(*) as total_pendaftar FROM alternatif");
        $row = mysqli_fetch_assoc($query);
        $totalPendaftar = $row['total_pendaftar'];
        ?>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="pendaftar">
                                Total Jumlah Pendaftar : <?php echo $totalPendaftar; ?> Orang
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col ">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="bukuPanduan.php" class="text-dashboard">Panduan Penggunaan</a></div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-solid fa-book  fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-kriteria.php" class="text-dashboard">Buka Data Kriteria Rumah Makan</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cube fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-sub-kriteria.php" class="text-dashboard">Buka Data Sub Kriteria Rumah Makan</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-alternatif.php" class="text-dashboard">Buka Data Pendaftar Rumah Makan</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-penilaian.php" class="text-dashboard">Buka Data Penilaian Pendaftar</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-edit fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="perhitungan.php" class="text-dashboard">Buka Data Perhitungan Pendaftar</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calculator fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="hasil.php" class="text-dashboard">Buka Data Hasil Akhir Pendaftar</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="tentang.php" class="text-dashboard">Buka Data Tentang Kami</a></div>
                        </div>
                        <div class="col-auto"> 
                            <i class="fas fa-fw fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>




</div>

<?php
require_once('template/footer.php');
?>