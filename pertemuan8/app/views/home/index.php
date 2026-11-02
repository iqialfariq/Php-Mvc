    <!-- PERTEMUAN 8 - BELAJAR FLASH MESSAGE -->

    <div class="container mt-4">
        <div class="p-4 bg-dark rounded-4">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-white">Selamat Datang!</h1>
                <p class="col-md-8 fs-6 text-white mb-4">
                    <!-- Cetak keyword nama yang sudah di kirim dari controller yang di simpan di variabel $data -->
                    Halo, nama saya <?= $data['nama']; ?>
                </p>
                <a href="#" class="btn btn-secondary btn-lg fs-6">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>