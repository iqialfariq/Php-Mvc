<?php
    // PERTEMUAN 3 - BELAJAR VIEW

    class Home extends Controller {
        // Method default index untuk class Home
        public function index() 
        {
            // Siapkan data untuk nilai default dengan keyword title
            $data ['title'] = 'Home';

            // Panggil method view dengan $this-> lalu kirimkan argumen untuk mengakses file index yang ada di folder home
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        }
    }
?>