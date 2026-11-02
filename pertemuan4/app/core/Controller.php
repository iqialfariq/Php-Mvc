<?php
    // PERTEMUAN 4 - BELAJAR ASSET

    // CLASS CONTROLLER UTAMA UNTUK SEMUA CLASS YANG ADA DI DALAM FOLDER CONTROLLERS
    class Controller {
        // Method untuk mengakses folder view
        public function view($view, $data = [])
        {
            // Panggil file berdasarkan nilai parameter $view yang berada di dalam folder views
            require_once '../app/views/' . $view . '.php';
        }
    }
?>