<?php
    // PERTEMUAN 9 - BELAJAR DELETE DATA

    class Flasher {
        // Method static untuk menyimpan data pesan
        public static function setFlash($pesan, $aksi, $tipe)
        {
            // Simpan nilai parameter $pesan, $aksi, dan $tipe ke dalam $_SESSION dengan keyword flash
            $_SESSION['flash'] = [
                'pesan' => $pesan,
                'aksi' => $aksi,
                'tipe' => $tipe
            ];
        }

        // Method static untuk menampilkan pesan flasher
        public static function flash()
        {
            // Jika $_SESSION dengan keyword flash sudah ada
            if (isset($_SESSION['flash'])) {
                // Cetak pesan bedasarkan nilai dari parameter yang ada di $_SESSION dengan keyword flash
                echo '
                    <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                        Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
                // Hapus pesan $_SESSION jika sudah di pakai
                unset($_SESSION['flash']);
            }
        }

    }
?>