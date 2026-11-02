<?php
    // PERTEMUAN 6 - BELAJAR DATABASE WRAPPER

    class User_model {
        // Property untuk menyimpan data pengguna
        private $nama = 'Daniel';

        // Method untuk mengakses property $nama
        public function getUser() {
            // Kembalikan nilai $nama ke method yang memanggil
            return $this->nama;
        }
    }

?>