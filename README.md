# PHP Framework (Codeigniter4)
| Praktikum 1-5  |  Pemrograman Web 2  
|-------|---------
| NIM   | 312310576
| Nama  | Taufik Hidayat
| Kelas | TI.23.A6
| Dosen |  Agung Nugroho, S.Kom., M.Kom.

## Praktikum 1

## Praktikum 4
### Halaman Login dengan filter Auth pada Config/Routes.php, menyimpan database dengan UserSeeder.

![image](ss/ss25.png)

### Setelah Login & Masuk ke halaman Admin Artikel.

![image](ss/ss26.png)

## Praktikum 5
- Membuat Pagination

Pagination merupakan proses yang digunakan untuk membatasi tampilan yang panjang
dari data yang banyak pada sebuah website. Fungsi pagination adalah memecah tampilan
menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan pada
setiap halaman.

Untuk membuat pagination, buka Kembali App/Controller/Artikel, kemudian modifikasi kode
pada method public function admin_index seperti berikut.

![image](ss/ssp5_2.png)

Kemudian buka kembali file App/Views/artikel/admin_index.php dan tambahkan form
pencarian sebelum deklarasi tabel seperti berikut:

![image](ss/ssp5_3.png)

Dan pada link pager ubah seperti berikut.
App/Views/artikel/admin_index.php bagian paling bawah diatas footer

![image](ss/ssp5_4.png)

Hasilnya akan seperti ini:

![image](ss/ssp5.png)
