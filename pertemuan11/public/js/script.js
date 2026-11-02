// Panggil fungsi Jquery
$(function () {
    // Jquery tolong cariin class yang nama nya tombolTambahData, ketika tombol tersebut diklik jalankan sebuah fungsi
    $('.tombolTambahData').on('click', function () {
        // Jquery tolong cariin id yang nama nya judulModal, ketika ketemu ubah html nya jadi Tambah Data Mahasiswa
        $('#judulModal').html('Tambah Data Mahasiswa');
        // Jquery tolong cariin class modal-footer yang di dalam nya ada button dengan type submit, ketika ketemu ubah html nya jadi Tambah Data
        $('.modal-footer button[type="submit"]').html('Tambah Data');
        // Jquery tolong cariin class modal-body yang di dalam nya ada form, lalu kosongkan seluruh input di dalam form tersebut
        $('.modal-body form').trigger('reset');
        // Kosongkan value input dengan id id
        $('#id').val('');
    });

    // Jquery tolong cariin class yang nama nya tampilModalUbah, ketika tombol tersebut diklik jalankan sebuah fungsi
    $('.tampilModalUbah').on('click', function () {
        // Jquery tolong cariin id yang nama nya judulModal, ketika ketemu ubah html nya jadi Ubah Data Mahasiswa
        $('#judulModal').html('Ubah Data Mahasiswa');
        // Jquery tolong cariin class modal-footer yang di dalam nya ada button dengan type submit, ketika ketemu ubah html nya jadi Ubah Data
        $('.modal-footer button[type="submit"]').html('Ubah Data');
        // Jquery tolong cariin class modal-body yang di dalam nya ada form, ketika ketemu ubah attribute acction nya jadi method ubah
        $('.modal-body form').attr('action', 'http://localhost/belajar_mvc/pertemuan10/public/mahasiswa/ubah');
        // Jquery tolong ambil sebuah data dari keyword id yang ada di dalam tombol ubah data, lalu simpan hasil nya ke variabel id
        const id = $(this).data('id');

        $.ajax({
            // Tentukan URL yang dituju untuk menjalankan method getubah pada controller Mahasiswa
            url: 'http://localhost/belajar_mvc/pertemuan10/public/mahasiswa/getubah',
            // Kirimkan nilai variabel id melalui data dengan key id
            data: { id: id },
            // Tentukan metode pengiriman data menggunakan POST
            method: 'post',
            // Tentukan format data yang diharapkan dari respons server berupa JSON
            dataType: 'json',
            // Jalankan sebuah fungsi kalo berhasil
            success: function (data) {
                // Jquery tolong cariin id nama, ketika ketemu ubah value nya menggunakan nilai nama dari objek data
                $('#nama').val(data.nama);
                // Jquery tolong cariin id nrp, ketika ketemu ubah value nya menggunakan nilai nrp dari objek data
                $('#nrp').val(data.nrp);
                // Jquery tolong cariin id email, ketika ketemu ubah value nya menggunakan nilai email dari objek data
                $('#email').val(data.email);
                // Jquery tolong cariin id jurusan, ketika ketemu ubah value nya menggunakan nilai jurusan dari objek data
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});