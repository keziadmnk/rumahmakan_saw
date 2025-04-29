<?php
require_once('includes/init.php');
$page = "Tentang Kami";
require_once('template/header.php');
?>

<!-- Tambahkan CSS -->
<style>
    .text-white {
        color: #FFFFFF !important;
    }

    .card-body {
        width: 100%;
        
        background-color: rgb(53, 87, 162);
        display: flex;
        justify-content: center;
        align-items: flex-start;
        text-align: center;
        padding: 40px;
        box-sizing: border-box;
        overflow-y: auto;
    }

    .members-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        width: 100%;
        max-width: 1000px;
    }

    .member-card {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid white;
        border-radius: 15px;
        padding: 20px;
        transition: transform 0.3s, background 0.3s;
    }

    .member-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.2);
    }

    .member-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid white;
        margin-bottom: 15px;
    }

    .member-card h4, .member-card p {
        margin: 5px 0;
    }

    @media (max-width: 768px) {
        .card-body {
            padding: 20px;
        }
    }
</style>

<div class="mb-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Anggota Kelompok</h1>
    </div>

    <!-- Fullscreen Card -->
    <div class="card-body">
        <div class="members-grid">
            <!-- Anggota 1 -->
            <div class="member-card text-white">
                <img src="assets/img/loly.jpg"  alt="Foto Anggota 1">
                <h4><b>Loly Amelia Nurza</b></h4>
                <p>NIM: 2311521016</p>
            </div>

            <!-- Anggota 2 -->
            <div class="member-card text-white">
                <img src="assets/img/kezia.jpg" alt="Foto Anggota 2">
                <h4><b>Kezia Valerina Damanik</b></h4>
                <p>NIM: 2311522010</p>
            </div>

            <!-- Anggota 3 -->
            <div class="member-card text-white">
                <img src="assets/img/fachri.jpg" alt="Foto Anggota 3">
                <h4><b>Fachri Akbar</b></h4>
                <p>NIM: 2311523004</p>
            </div>

            <!-- Anggota 4 -->
            <div class="member-card text-white">
                <img src="assets/img/zhahra.jpg" alt="Foto Anggota 4">
                <h4><b>Zhahra Idhya Astwoti</b></h4>
                <p>NIM: 2311523006</p>
            </div>

            <!-- Anggota 5 -->
            <div class="member-card text-white">
                <img src="assets/img/della.jpg" alt="Foto Anggota 5">
                <h4><b>Della Khairunnisa</b></h4>
                <p>NIM: 2311523032</p>
            </div>
        </div>
    </div>
</div>

<?php
require_once('template/footer.php');
?>