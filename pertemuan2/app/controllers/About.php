<?php
    // PERTEMUAN 2 - BELAJAR CONTROLLER

    class About {
        // Method default index untuk class About
        public function index($nama = "John Doe", $pekerjaan = "Programmer", $umur = 30) 
        {
            echo "Halo nama saya $nama, pekerjaan saya adalah $pekerjaan, dan umur saya $umur tahun.";
        }

        // Method page
        public function page() 
        {
            echo "About/page";
        }
    }
?>