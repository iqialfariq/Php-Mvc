<?php
    // PERTEMUAN 5 - BELAJAR MODEL

    class Mahasiswa_model {
        private $dbh; // Data Base Handler
        private $stmt; // Statement
        
        // Method untuk koneksi ke dalam database
        public function __construct()
        {
            // Data Source Name
            $dsn = 'mysql:host=localhost;dbname=mahasiswa';
            
            // Jalankan kode untuk membuat koneksi ke database
            try {
                // Buat object bedasarkan nilai dari variabel $dsn, username, dan password lalu simpan hasil nya ke property $dbh
                $this->dbh = new PDO ($dsn, 'root', '');
            // Tangani exception jika terjadi kegagalan koneksi database lalu simpan hasil nya ke variabel $e
            } catch (PDOException $e) {
                // Dapatkan pesan error bedasarkan nilai dari variabel $e lalu hentikan program nya
                die($e->getMessage());
            }
        }

        // Method untuk mengambil semua data dari property $mhs
        public function getAllmahasiswa()
        {
            // Panggil property $dbh lalu siapkan sebuah query dari tabel database yang akan diambil, 
            // jika sudah di ambil simpan ke property $stmt
            $this->stmt = $this->dbh->prepare('SELECT * FROM all_mahasiswa');
            // Jalankan program query dengan execute bedasarkan nilai dari property $stmt
            $this->stmt->execute();
            // Ambil semua data bedasarkan nilai dari property $stmt yang berasal dari database 
            // lalu kembalikan hasil akhir nya ke method yang memanggil getAllmahasiswa()
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>