<?php
    // PERTEMUAN 6 - BELAJAR DATABASE WRAPPER

    class Mahasiswa extends Controller {
        // Method default index untuk class Mahasiswa
        public function index() {
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
        public function detail($id) {
            // Siapkan data untuk nilai default dengan keyword title
            $data['title'] = 'Detail Mahasiswa';

            // Panggil method model lalu kirimkan argumen nama class nya, ketika ketemu jalankan method yang ada di dalam nya
            $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByid($id);

            // Panggil method view dengan $this-> lalu kirimkan argumen untuk mengakses file yang ada di folder home / folder templates
            $this->view('templates/header', $data);
            $this->view('mahasiswa/detail', $data);
            $this->view('templates/footer');
        }
    }
?>