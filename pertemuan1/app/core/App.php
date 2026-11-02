<?php
    // PERTEMUAN 1 - BELAJAR ROUTING

    class App {
        // Method untuk menjalankan fungsi dari method pemecah URL
        public function __construct() 
        {
            // Panggil method parseURL dengan $this-> lalu simpan ke dalam variabel $url
            $url = $this->parseUrl();
            var_dump($url);
        }

        // Method untuk pemecah URL
        public function parseUrl()
        {
            // Jika nilai dari key URL yang di tangkap oleh $_GET tersedia
            if (isset($_GET['url'])) {
                // Bersihkan tanda SLASH paling akhir dengan fungsi rtrim(),
                // bedasarkan nilai dari URL yang di tangkap oleh $_GET lalu simpan hasil nya ke variabel $url
                $url = rtrim($_GET['url'], '/'); // Fungsi ini menghasilkan STRING

                // Bersihkan karakter yang tidak di benarkan di dalam URL dengan fungsi filter_var(),
                // bedasarkan nilai dari variabel $url yang sudah di bersihkan tanda SLASH nya lalu simpan hasil nya ke variabel $url
                $url = filter_var($url, FILTER_SANITIZE_URL); // Fungsi ini menghasilkan STRING

                // Pecah nilai dari variabel $url dengan fungsi explode(),
                // bedasarkan tanda SLASH di setiap elemen URL nya lalu simpan hasil nya ke variabel $url
                $url = explode('/', $url); // Fungsi ini menghasilkan ARRAY

                // Kembalikan hasil akhir nilai variabel $url ke method yang memanggil method parseUrl
                return $url;
            }
        }
    }
?>