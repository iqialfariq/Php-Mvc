<?php
    // PERTEMUAN 8 - BELAJAR FLASH MESSAGE

    class App {
        // Property untuk menyimpan nilai default dari Controller, Method, dan Params
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];

        // Method untuk menjalankan fungsi dari method pemecah URL
        public function __construct() 
        {
            // Panggil method parseURL dengan $this-> lalu simpan ke dalam variabel $url
            $url = $this->parseUrl();

            // === CONTROLLER ===
            // Jika elemen array $url dengan indeks ke 0 tersedia dan file yang nama nya sesuai bedasarkan array $url dengan index ke 0 itu,
            // ada di dalam folder controllers gabungkan dengan ekstensi .php
            if(isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
                // Timpah nilai default dari property $controller dengan nilai baru dari array $url dengan index ke 0
                $this->controller = $url[0];
                // Hapus elemen array dengan index ke 0 dari array $url
                unset($url[0]);
            }

            // Panggil file berdasarkan nilai property $controller yang berada di dalam folder controllers
            require_once '../app/controllers/' . $this->controller . '.php';
            // Buat object bedasarkan nilai baru dari property $controller lalu timpah nilai default milik property $controller
            $this->controller = new $this->controller;
            // === CONTROLLER ===

            // === METHOD ===
            // Jika elemen array $url dengan indeks ke 1 tersedia
            if (isset($url[1])) {
                // Jika method yang nama nya sesuai bedasarkan array $url dengan index ke 1 di dalam property $controller itu sudah ada
                if (method_exists($this->controller, $url[1])) {
                    // Timpah nilai default dari property $method dengan nilai baru dari array $url dengan index ke 1
                    $this->method = $url[1];
                    // Hapus elemen array dengan index ke 1 dari array $url
                    unset($url[1]);
                }
            }
            // === METHOD ===

            // === PARAMETER ===
            if(!empty($url)) {
                // Susun ulang indeks array $url agar di mulai ulang dari indeks ke-0 lalu simpan ke variabel $url
                $this->params = array_values($url);
            }
            // === PARAMETER ===

            // === JALANKAN CONTROLLER DAN METHOD, SERTA KIRIMKAN PARAMETER JIKA ADA ===
            call_user_func_array([$this->controller, $this->method], $this->params);
            // === JALANKAN CONTROLLER DAN METHOD, SERTA KIRIMKAN PARAMETER JIKA ADA ===
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