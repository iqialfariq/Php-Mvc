<?php
    // PERTEMUAN 9 - BELAJAR DELETE DATA

    class Mahasiswa extends Controller {
        // Method default index untuk class Mahasiswa
        public function index() 
        {
            // Siapkan data untuk nilai default dengan keyword title
            $data['title'] = 'Daftar Mahasiswa';

            // Panggil method model lalu kirimkan argumen nama class nya, ketika ketemu jalankan method yang ada di dalam nya
            $data['mhs'] = $this->model('Mahasiswa_model')->getAllmahasiswa();

            // Panggil method view dengan $this-> lalu kirimkan argumen untuk mengakses file yang ada di folder home / folder templates
            $this->view('templates/header', $data);
            $this->view('mahasiswa/index', $data);
            $this->view('templates/footer');
        }

        // Method detail untuk class Mahasiswa
        public function detail($id) 
        {
            // Siapkan data untuk nilai default dengan keyword title
            $data['title'] = 'Detail Mahasiswa';

            // Panggil method model lalu kirimkan argumen nama class nya, ketika ketemu jalankan method yang ada di dalam nya
            $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByid($id);

            // Panggil method view dengan $this-> lalu kirimkan argumen untuk mengakses file yang ada di folder home / folder templates
            $this->view('templates/header', $data);
            $this->view('mahasiswa/detail', $data);
            $this->view('templates/footer');
        }

        // === METHOD TAMBAH YANG FORM NYA BELUM DI VALIDASI KOSONG ATAU TIDAK ===
        // Method tambah untuk class Mahasiswa
        // public function tambah() 
        // {
        //     // Jika model Mahasiswa_model dipanggil, jalankan method tambahDataMahasiswa dengan mengirimkan nilai $_POST ke parameternya
        //     // Jika jumlah baris yang berhasil d itambahkan ke database nilai nya lebih dari 0,
        //     if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
        //         // Siapkan pesan flash message jika berhasil
        //         Flasher::setFlash('berhasil', 'di tambahkan', 'success');
        //         // Arahkan pengguna kembali ke halaman mahasiswa melalui URL BASE_URL/mahasiswa
        //         header('Location: ' . BASE_URL . '/mahasiswa');
        //         exit;
        //     } else {
        //         // Siapkan pesan flash message jika gagal
        //         Flasher::setFlash('gagal', 'di tambahkan', 'danger');
        //         // Arahkan pengguna kembali ke halaman mahasiswa melalui URL BASE_URL/mahasiswa
        //         header('Location: ' . BASE_URL . '/mahasiswa');
        //     }
        // }

        // === METHOD TAMBAH YANG FORM NYA SUDAH DI VALIDASI KOSONG ATAU TIDAK ===
        // Method tambah untuk class Mahasiswa
        public function tambah() 
        {
            // Periksa apakah terdapat input yang kosong
            if (
                trim($_POST['nama'] ?? '') === '' ||
                trim($_POST['nrp'] ?? '') === '' ||
                trim($_POST['email'] ?? '') === '' ||
                trim($_POST['jurusan'] ?? '') === ''
            ) {
                // Siapkan pesan flash message jika terdapat input kosong
                Flasher::setFlash('gagal', 'di tambahkan karena input kosong', 'danger');
                // Arahkan pengguna kembali ke halaman mahasiswa melalui URL BASE_URL/mahasiswa
                header('Location: ' . BASE_URL . '/mahasiswa');
                exit;
            }

            // Jika model Mahasiswa_model dipanggil, jalankan method tambahDataMahasiswa dengan mengirimkan nilai $_POST ke parameternya
            // Jika jumlah baris yang berhasil ditambahkan ke database lebih dari 0
            if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
                // Siapkan pesan flash message jika berhasil
                Flasher::setFlash('berhasil', 'di tambahkan', 'success');
            } else {
                // Siapkan pesan flash message jika gagal
                Flasher::setFlash('gagal', 'di tambahkan', 'danger');
            }
            // Arahkan pengguna kembali ke halaman mahasiswa melalui URL BASE_URL/mahasiswa
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }

        // Method hapus untuk class Mahasiswa
        public function hapus($id) 
        {
            // Jika model Mahasiswa_model dipanggil, jalankan method hapusDataMahasiswa dengan mengirimkan nilai $id ke parameternya
            // Jika jumlah baris yang berhasil dihapus dari database nilai nya lebih dari 0,
            if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
                // Siapkan pesan flash message jika berhasil
                Flasher::setFlash('berhasil', 'di hapus', 'success');
                // Arahkan pengguna kembali ke halaman mahasiswa melalui URL BASE_URL/mahasiswa
                header('Location: ' . BASE_URL . '/mahasiswa');
                exit;
            } else {
                // Siapkan pesan flash message jika gagal
                Flasher::setFlash('gagal', 'di hapus', 'danger');
                // Arahkan pengguna kembali ke halaman mahasiswa melalui URL BASE_URL/mahasiswa
                header('Location: ' . BASE_URL . '/mahasiswa');
            }
        }
    }
?>