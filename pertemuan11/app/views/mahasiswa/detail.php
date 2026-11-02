    <!-- PERTEMUAN 11 - BELAJAR SEARCHING DATA -->

    <div class="container mt-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <!-- Cetak keyword nama, nrp, email, dan jurusan yang berasal dari tabel di dalam database 
                yang sudah di kirim dari controller yang di simpan di variabel $data dengan keyword mhs -->
                <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
                <p class="mb-0 text-body-dark">Nrp: <?= $data['mhs']['nrp'] ?></p>
                <p class="mb-0 text-body-dark">Email: <?= $data['mhs']['email'] ?></p>
                <p class="mb-0 text-body-dark">Jurusan: <?= $data['mhs']['jurusan'] ?></p>
                <a href="<?= BASE_URL ?>/mahasiswa" class="badge text-decoration-none btn btn-dark mt-3">Kembali</a>
            </div>
        </div>
    </div>