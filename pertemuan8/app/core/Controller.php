<?php
    // PERTEMUAN 8 - BELAJAR FLASH MESSAGE

    // CLASS CONTROLLER UTAMA UNTUK SEMUA CLASS YANG ADA DI DALAM FOLDER CONTROLLERS
    class Controller {
        // Method untuk mengakses folder view
        public function view($view, $data = [])
        {
            // Panggil file berdasarkan nilai parameter $view yang berada di dalam folder views
            require_once '../app/views/' . $view . '.php';
        }

        // Method untuk mengakses folder model
        public function model($model) {
            // Panggil file berdasarkan nilai parameter $model yang berada di dalam folder models
            require_once '../app/models/' . $model . '.php';
            // Kembalikan hasil akhir nilai menjadi object ke method yang memanggil method model
            return new $model();
        }
    }
?>