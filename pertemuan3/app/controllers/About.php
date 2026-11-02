<?php
    // PERTEMUAN 3 - BELAJAR VIEW
    
    class About extends Controller {
        // Method default index untuk class About
        public function index($nama = "John Doe", $pekerjaan = "Programmer", $umur = 40) 
        {
            // Siapkan data bedasarkan parameter
            $data = [
                'nama' => $nama,
                'pekerjaan' => $pekerjaan,
                'umur' => $umur
            ];

            // Siapkan data untuk nilai default dengan keyword title
            $data ['title'] = 'About';

            // Panggil method view dengan $this-> lalu kirimkan argumen untuk mengakses file index yang ada di folder about
            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }

        // Method page
        public function page() 
        {
            // Siapkan data untuk nilai default dengan keyword title
            $data ['title'] = 'About';

            // Panggil method view dengan $this-> lalu kirimkan argumen untuk mengakses file page yang ada di folder about
            $this->view('templates/header', $data);
            $this->view('about/page');
            $this->view('templates/footer');
        }
    }
?>