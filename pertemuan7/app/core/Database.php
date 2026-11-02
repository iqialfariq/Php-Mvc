<?php
    // PERTEMUAN 7 - BELAJAR INSERT DATA

    class Database {
        // Buat property untuk menyimpan koneksi ke database dari nila constanta file config
        private $host = DB_HOST;
        private $username = DB_USER;
        private $password = DB_PASS;
        private $database = DB_NAME;

        // Property untuk menyimpan eksekusi koenksi ke database
        private $dbh;
        private $stmt;

        // Method untuk menjalankan koneksi ke dalam database
        public function __construct()
        {
            // Data Source Name
            // Gabung url nya bedasarkan nilai dari property koneksi database di atas
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;
            
            // Mengatur opsi konfigurasi koneksi database PDO
            $option = [
                // Menggunakan koneksi database yang persisten
                PDO::ATTR_PERSISTENT => true,
                // Menampilkan error dalam bentuk exception
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try {
                // Buat object bedasarkan nilai dari variabel $dsn, serta property $username dan $password
                $this->dbh = new PDO ($dsn, $this->username, $this->password, $option);
            } catch (PDOException $e) {
                // Dapatkan pesan error bedasarkan nilai dari variabel $e lalu hentikan program nya
                die($e->getMessage());
            }
        }

        // Method untuk menjalankan query pada tabel di dalam database
        public function query($query)
        {
            // Siapkan query bedasarkan nilai dari parameter bedasarkan perintah koneksi dari property $dbh, lalu simpan hasil nya ke property $stmt
            $this->stmt = $this->dbh->prepare($query);
        }

        // Method untuk mengikat data bedasarkan perintah tertentu
        public function bind($param, $value, $type = null)
        {
            // Jika parameter $type itu null
            if (is_null($type)) {
                // Jalankan switch
                switch (true) {
                    // Jika parameter $value itu Integer
                    case is_int($value):
                        // Timpah nilai default parameter $type dengan parameter Integer
                        $type = PDO::PARAM_INT;
                        break;
                    // Jika parameter $value itu Boolean
                    case is_bool($value):
                        // Timpah nilai default parameter $type dengan parameter Boolean
                        $type = PDO::PARAM_BOOL;
                        break;
                    // Jika parameter $value itu NULL
                    case is_null($value):
                        // Timpah nilai default parameter $type dengan parameter Null
                        $type = PDO::PARAM_NULL;
                        break;
                    // Selain dari kasus di atas
                    default:
                        // Timpah nilai default parameter $type dengan parameter String
                        $type = PDO::PARAM_STR;
                }
            }
            
            // Ikat nilai bedasarkan parameter dari method bind dengan nilai dari property $stmt
            $this->stmt->bindValue($param, $value, $type); 
        }

        // Method untuk menjalankan kode bedasarkan perintah
        public function execute()
        {
            // Jalankan kode bedasarkan perintah dan nilai dari property $stmt
            $this->stmt->execute();
        }
        
        // Method untuk mengambil semua data
        public function resultSet()
        {
            // Panggil eksekusi kode method execute
            $this->execute();
            // Kembalikan semua nilai nya menjadi array associative bedasarkan nilai dari property $stmt ke method yang memanggil
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // Method untuk mengambil satu data
        public function single()
        {
            // Panggil eksekusi kode method execute
            $this->execute();
            // Kembalikan satu nilai nya menjadi array associative bedasarkan nilai dari property $stmt ke method yang memanggil
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }

        // Method untuk menghitung baris yang baru di tambahkan
        public function rowCount()
        {
            // Kembalikan hasil nya berupa nilai bedasarkan hasil akhir dari property $stmt
            return $this->stmt->rowCount();
        }
    }
?>