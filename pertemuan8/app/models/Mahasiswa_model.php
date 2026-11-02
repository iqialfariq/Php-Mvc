<?php
    // PERTEMUAN 8 - BELAJAR FLASH MESSAGE
    
    class Mahasiswa_model {
        // Property untuk menyimpan nilai bedasarkan nama tabel
        private $table = 'all_mahasiswa';
        private $db;

        // Method untuk menginisialisasi class Database
        public function __construct()
        {
            // Buat object bedasarkan perintah dari class Database lalu simpan ke property $db
            $this->db = new Database;
        }

        // Method untuk mengambil semua data dari property $mhs
        public function getAllmahasiswa()
        {
            // Jalankan method query() dari class Database untuk mengambil data dari tabel yang ditentukan
            $this->db->query("SELECT * FROM " . $this->table);
            // Jalankan method resultSet() dari class Database lalu ambil semua data yang ada di dalam tabel, 
            // lalu kembalikan nilai nya ke method yang memanggil
            return $this->db->resultSet();
        }

        // Method untuk mengambil data berdasarkan ID
        public function getMahasiswaByid($id)
        {
            // Jalankan method query() dari class Database untuk mengambil data dari tabel yang ditentukan bedasarkan id nya
            $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
            // Binding parameter id bedasarkan id yang ada di table database dan id yang ada di url
            $this->db->bind('id', $id);
            // Jalankan method single() dari class Database lalu ambil satu data yang ada di dalam tabel, 
            // lalu kembalikan nilai nya ke method yang memanggil
            return $this->db->single();
        }

        // Method untuk menambahkan data mahasiswa
        public function tambahDataMahasiswa($data)
        {
            // Siapkan perintah query bedasarkan tabel dan value yang sudah di tentukan lalu simpan ke variabel $query
            $query = "INSERT INTO " . $this->table . " (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)";
            // Jalankan method query dengan parameter dari variabel $query yang ada di dalam object class Database
            $this->db->query($query);
            // Ikat keyword bedasarkan hasil dari form dan juga tabel database
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nrp', $data['nrp']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);
            $this->db->execute();
            // Kembalikan nilai nya bedasarkan eksekusi dari method rowCount() bedasarkan nilai property $db
            return $this->db->rowCount();
        }
    }
?>