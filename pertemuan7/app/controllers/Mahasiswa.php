<?php
    // PERTEMUAN 7 - BELAJAR INSERT DATA

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

        // Method tambah untuk class Mahasiswa
        public function tambah() 
        {
            // Jika model Mahasiswa_model dipanggil, jalankan method tambahDataMahasiswa dengan mengirimkan nilai $_POST ke parameternya
            // Jika jumlah baris yang berhasil d itambahkan ke database nilai nya lebih dari 0,
            if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
                // Arahkan pengguna kembali ke halaman mahasiswa melalui URL BASE_URL/mahasiswa
                header('Location: ' . BASE_URL . '/mahasiswa');
                exit;
            } 
        }
    }
?>