# 🧠 Penjelasan PHP Mvc
<p align="justify">
MVC singkatan dari Model View Controller. MVC itu sendiri adalah pola / struktur untuk mengatur kode aplikasi supaya kode PHP kita tidak menumpuk dalam satu file.
</p>

## 🛣️ Pertemuan 1 - ROUTING
```
- Routing adalah bagian dari MVC yang bertugas menentukan request/URL yang masuk akan diarahkan ke bagian mana dalam aplikasi.
- Routing membaca URL yang diminta oleh user.
- Routing kemudian menentukan Controller dan method yang harus dijalankan berdasarkan URL tersebut.
- Routing menjadi salah satu bagian awal yang memproses request sebelum diteruskan ke Controller.
```

## 🎮 Pertemuan 2 - CONTROLLER
```
- Controller adalah bagian dari MVC yang bertugas mengatur alur request dari user.
- Controller menerima request, kemudian menentukan apa yang harus dilakukan oleh aplikasi.
- Controller biasanya meminta View untuk menampilkan hasil kepada user.
- Controller juga bisa berkomunikasi dengan Model jika membutuhkan atau ingin mengubah data.
```

## 🖥️ Pertemuan 3 - VIEW
```
- View adalah bagian dari MVC yang bertugas untuk menampilkan data kepada user.
- View tidak seharusnya mengurus logika bisnis atau proses database.
- Data yang dibutuhkan View biasanya dikirim dari Controller.
```

## 📁 Pertemuan 4 - ASSETS
```
- Assets adalah kumpulan file yang digunakan untuk mendukung tampilan dan interaksi pada aplikasi, seperti CSS, JavaScript, gambar, dan font.
- Assets biasanya diletakkan di dalam folder public karena file tersebut perlu diakses langsung oleh browser.
- Assets digunakan oleh View untuk melengkapi tampilan dan interaksi pada halaman.
- Assets berbeda dengan Controller, Model, dan View karena Assets bukan bagian dari proses utama MVC, melainkan file pendukung aplikasi.
```

## 🧩 Pertemuan 5 - MODEL
```
- Model adalah bagian dari MVC yang bertugas mengelola dan mengolah data pada aplikasi.
- Model biasanya digunakan untuk berinteraksi dengan database, seperti mengambil, menambah, mengubah, dan menghapus data.
- Model dipanggil oleh Controller ketika Controller membutuhkan atau ingin mengolah suatu data.
- Model membantu memisahkan proses pengolahan data dari Controller, sehingga kode aplikasi menjadi lebih terstruktur dan mudah dikelola.
```

## 🗄️ Pertemuan 6 - DATABASE WRAPPER
```
- Database Wrapper adalah Class yang digunakan sebagai perantara antara aplikasi dengan database.
- Database Wrapper digunakan untuk menyederhanakan dan mengatur proses interaksi.
- Database Wrapper biasanya berisi property dan method yang digunakan untuk mengatur koneksi, menjalankan query, mengirim parameter, dan mengambil hasil dari database.
```

## ➕ Pertemuan 7 - INSERT DATA
```
- Database Wrapper adalah Class yang digunakan sebagai perantara antara aplikasi dengan database.
- Database Wrapper digunakan untuk menyederhanakan dan mengatur proses interaksi.
- Database Wrapper biasanya berisi property dan method yang digunakan untuk mengatur koneksi, menjalankan query, mengirim parameter, dan mengambil hasil dari database.
```

## 🔔 Pertemuan 8 - FLASH MESSAGE
```
- Flash Message adalah pesan sementara yang digunakan untuk memberikan informasi kepada pengguna setelah suatu proses dilakukan, seperti data berhasil ditambahkan, diubah, atau dihapus.
- Dalam konsep MVC, proses Flash Message biasanya melibatkan Controller, Flasher, dan View.
- Controller digunakan untuk menentukan pesan berdasarkan hasil proses yang dilakukan, kemudian memanggil method pada class Flasher untuk menyimpan pesan sementara ke dalam session.
- Flasher digunakan untuk menyimpan pesan sementara ke dalam $_SESSION agar pesan tetap tersedia setelah proses redirect dilakukan.
- View digunakan untuk menampilkan pesan kepada pengguna, kemudian pesan tersebut dihapus dari session agar tidak muncul kembali ketika halaman dibuka berikutnya.
```

## 🗑️ Pertemuan 9 - DELETE DATA
```
- DELETE adalah perintah SQL yang digunakan untuk menghapus data dari tabel database.
- Dalam konsep MVC, proses delete data biasanya melibatkan View, Controller, dan Model.
- View digunakan untuk menyediakan tombol hapus agar pengguna dapat memilih data yang ingin dihapus dari database.
- Controller digunakan untuk menerima ID data yang ingin dihapus dari View dan meneruskannya ke Model untuk diproses.
- Model digunakan untuk menjalankan perintah SQL DELETE berdasarkan ID data yang diterima untuk menghapus data dari tabel database.
```

## ✏️ Pertemuan 10 - UPDATE DATA
```
- UPDATE adalah perintah SQL yang digunakan untuk mengubah atau memperbarui data yang sudah ada di dalam tabel database.
- Dalam konsep MVC, proses update data biasanya melibatkan View, Controller, dan Model.
- View digunakan untuk menyediakan form input yang menampilkan data lama agar pengguna dapat mengubah data yang ingin diperbarui di database.
- Controller digunakan untuk menerima ID dan data baru dari View, kemudian meneruskannya ke Model untuk diproses.
- Model digunakan untuk menjalankan perintah SQL UPDATE berdasarkan ID data yang diterima untuk memperbarui data di dalam tabel database.
```

## 🔎 Pertemuan 11 - SEARCHING
```
- SEARCHING adalah proses pencarian data di dalam tabel database berdasarkan keyword atau kata kunci yang dimasukkan oleh pengguna.
- Dalam konsep MVC, proses searching data biasanya melibatkan View, Controller, dan Model.
- View digunakan untuk menyediakan form input pencarian agar pengguna dapat memasukkan keyword untuk mencari data yang diinginkan.
- Controller digunakan untuk menerima keyword dari View, kemudian meneruskannya ke Model untuk diproses.
- Model digunakan untuk menjalankan perintah SQL SELECT dengan operator LIKE berdasarkan keyword yang diterima untuk mencari data yang sesuai di dalam tabel database.
```
