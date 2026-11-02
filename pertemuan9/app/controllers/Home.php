<?php
    // PERTEMUAN 9 - BELAJAR DELETE DATA

    class Home extends Controller {
        // Method default index untuk class Home
        public function index() 
        {
            // Siapkan data untuk nilai default dengan keyword title
            $data ['title'] = 'Home';

            // Panggil method model lalu kirimkan argumen nama class nya, ketika ketemu jalankan method yang ada di dalam nya
            $data ['nama'] = $this->model('User_model')->getUser();

            // Panggil method view dengan $this-> lalu kirimkan argumen untuk mengakses file yang ada di folder home / folder templates
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
    }
?>