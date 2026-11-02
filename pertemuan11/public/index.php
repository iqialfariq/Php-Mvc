<?php
    // PERTEMUAN 11 - BELAJAR SEARCHING DATA

    // Jika di dalam nya tidak ada session id
    if(!session_id()) {
        // Jalankan apapun session nya
        session_start();
    }

    // Panggil file yang berada di dalam folder app
    require_once '../app/init.php';

    // Panggil class App supaya bisa memakai method yang ada di dalam nya, 
    // lalu kalau sudah di pakai buat object baru lalu simpan ke variabel $app
    $app = new App;
?>