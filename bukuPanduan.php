<?php
require_once('includes/init.php');
$page = "Panduan Pengguna";
require_once('template/header.php');
?>

<!-- Tambahan CSS untuk teks putih dan tampilan layar penuh -->
<style>
    /* Warna teks menjadi putih */
    .text-white {
        color: #FFFFFF !important;
    }

    /* Menyesuaikan card agar memenuhi layar */
    .card-body {
        width: 100%;
        height: 100vh; /* Mengisi seluruh tinggi layar */
        background-color: rgb(53, 87, 162); /* Latar belakang biru gelap untuk kontras teks */
        display: flex;
        justify-content: center;
        align-items: flex-start;
        text-align: left;
        padding: 40px;
        box-sizing: border-box;
        overflow-y: auto;
    }

    /* Format teks di bagian SAW */
    .card-body h4,
    .card-body p {
        font-size: 18px;
        line-height: 1.8;
    }

    /* Responsif untuk ukuran layar kecil */
    @media (max-width: 768px) {
        .card-body h4,
        .card-body p {
            font-size: 16px;
        }
    }

    /* Gaya tambahan untuk bagian panduan */
    .guide-section {
        margin-bottom: 20px;
    }

    .guide-section ul {
        list-style-type: disc;
        padding-left: 20px;
    }
</style>

<div class="mb-4">
    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panduan Penggunaan Metode SAW</h1>
    </div>

    <!-- Konten Card Layar Penuh -->
    
    <div class="card-body">
        <div class="row no-gutters align-items-start">
            <div class="col mr-2">
                <!-- Informasi tentang SAW -->
                <h4 class="text-white">Apa itu SAW?</h4>
                <p class="text-white text-justify">
                    Simple Additive Weighting (SAW) adalah teknik pengambilan keputusan yang menghitung skor berbagai alternatif berdasarkan kriteria yang sudah ditentukan. Setiap kriteria diberi bobot dan alternatif dinilai berdasarkan normalisasi nilai kriteria tersebut.
                </p>

                <div class="guide-section text-white text-justify">
                    <h3>Langkah-langkah Penggunaan Sistem SPK SAW:</h3>
                    <p>Ikuti tahapan berikut untuk menggunakan sistem berbasis SAW:</p>
                    <ul style="list-style-type: none; padding-left: 0;">    
                        <li><strong>1. Input data kriteria:</strong> Tambahkan kriteria analisis beserta bobot masing-masing. Pastikan total bobot berjumlah 100% atau 1. Tentukan pula Tipe Kriteria dan Metode Penilaian.
                            <ul style="list-style-type: disc; margin-left: 20px;">
                                <li><strong>Tipe Kriteria:</strong></li>
                                <ul style="list-style-type: circle; margin-left: 20px;">
                                    <li><strong>Cost:</strong> Semakin rendah nilainya, semakin baik (contoh: biaya, waktu tempuh).</li>
                                    <li><strong>Benefit:</strong> Semakin tinggi nilainya, semakin baik (contoh: keuntungan, kualitas).</li>
                                </ul>
                                <li><strong>Metode Penilaian:</strong></li>
                                <ul style="list-style-type: circle; margin-left: 20px;">
                                    <li><strong>Input Langsung:</strong> Memasukkan nilai secara manual untuk setiap alternatif.</li>
                                    <li><strong>Sub-Kriteria:</strong> Memilih nilai berdasarkan sub-kriteria yang tersedia.</li>
                                </ul>
                            </ul>
                        </li>

                        <li><strong>2. Tambahkan data sub-kriteria:</strong> Jika memilih metode sub-kriteria, masukkan hingga maksimal 5 sub-kriteria dengan rentang nilai 1-5.</li>

                        <li><strong>3. Masukkan data alternatif:</strong> Input semua alternatif yang ingin dibandingkan berdasarkan kriteria yang ada.</li>

                        <li><strong>4. Jalankan proses perhitungan:</strong> Gunakan tombol hitung untuk menjalankan metode SAW berdasarkan data yang sudah diinputkan.</li>

                        <li><strong>5. Lihat hasil perhitungan:</strong> Sistem akan memperlihatkan hasil evaluasi perhitungan SAW.</li>

                        <li><strong>6. Unduh hasil:</strong> Bila perlu, Anda dapat mengunduh hasil analisis dalam bentuk dokumen untuk keperluan laporan.</li>
                    </ul>
                </div>

                <div class="guide-section text-white text-justify">
                    <h4>Catatan Penting:</h4>
                    <ul>
                        <li>Metode SAW menawarkan pengambilan keputusan berbasis kalkulasi objektif.</li>
                        <li>Pastikan data yang diinput sudah tepat untuk mendapatkan hasil yang akurat.</li>
                        <li>Untuk kendala teknis, silakan hubungi kami melalui menu <strong>Kontak</strong>.</li>
                    </ul>
                </div>

                <div class="guide-section text-white text-justify">
                    <h4>Kontak Bantuan</h4>
                    <p>
                        Jika membutuhkan dukungan tambahan, Anda dapat menghubungi kami melalui email: keziadamanik20@gmail.com atau WhatsApp di nomor 085265254689.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
require_once('template/footer.php');
?>
