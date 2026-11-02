    <!-- PERTEMUAN 11 - BELAJAR SEARCHING DATA -->

    <div class="container mt-4">
        <h1>Selamat datang di halaman About</h1>
		<img src="<?= BASE_URL; ?>/img/Bmw320i.jpg" alt="BMW 320i" class="w-25 rounded-circle shadow mt-3 mb-4">
        <!-- Cetak keyword nama, pekerjaan, dan umur yang sudah di kirim dari controller yang di simpan di variabel $data -->
        <p>Halo nama saya adalah <?= $data['nama']; ?>, saya bekerja sebagai <?= $data['pekerjaan']; ?> dan saya berumur <?= $data['umur']; ?> tahun.</p>
    </div>