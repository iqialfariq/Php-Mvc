    <!-- PERTEMUAN 11 - BELAJAR SEARCHING DATA -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <!-- Panggil fungsi Flasher bedasarkan nilai dari method flash() -->
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-dark mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data Mahasiswa
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="<?= BASE_URL; ?>/mahasiswa/cari" method="post" class="mb-3 mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                        <button class="btn btn-outline-dark" type="submit" id="btnSearch">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <!-- Ulangi data dari keyword mhs yang di kirim dari controller lalu kirimkan semua data ke variabel pengulang $mahasiswa -->
                    <?php foreach ($data['mhs'] as $mahasiswa): ?>
                        <li class="list-group-item">
                            <?= $mahasiswa['nama'] ?>
                            <a href="<?= BASE_URL ?>/mahasiswa/hapus/<?= $mahasiswa['id']; ?>" class="badge text-decoration-none btn btn-danger float-end" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                Hapus
                            </a>
                            <a href="<?= BASE_URL ?>/mahasiswa/ubah/<?= $mahasiswa['id']; ?>" class="badge text-decoration-none btn btn-primary float-end me-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mahasiswa['id']; ?>">
                                Ubah
                            </a>
                            <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mahasiswa['id']; ?>" class="badge text-decoration-none btn btn-dark float-end me-2">
                                Detail
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Form input modal -->
    <div class="modal fade mt-5" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form tambah data -->
                    <form action="<?= BASE_URL ?>/mahasiswa/tambah" method="post" id="formTambah">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="nama" class="form-label">NAMA:</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP:</label>
                            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="Masukkan NRP">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">EMAIL:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">JURUSAN:</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark" form="formTambah">Tambah Data</button>
                </div>
            </div>
        </div>
    </div>