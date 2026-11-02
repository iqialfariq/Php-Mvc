<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-dark"><?= $data['mhs']['nrp'] ?></h6>
            <h6 class="card-subtitle mb-2 text-body-dark"><?= $data['mhs']['email'] ?></h6>
            <h6 class="card-subtitle mb-2 text-body-dark"><?= $data['mhs']['jurusan'] ?></h6>
            <a href="<?= BASE_URL ?>/mahasiswa" class="badge text-decoration-none btn btn-dark">Kembali</a>
        </div>
    </div>
</div>