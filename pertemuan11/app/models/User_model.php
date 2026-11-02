<?php
    // PERTEMUAN 11 - BELAJAR SEARCHING DATA

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