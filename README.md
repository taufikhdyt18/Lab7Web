# PHP Framework (Codeigniter4)
| Praktikum 1-3  |  Pemrograman Web 2  
|-------|---------
| NIM   | 312310576
| Nama  | Taufik Hidayat
| Kelas | TI.23.A6
| Dosen |  Agung Nugroho, S.Kom., M.Kom.

## Praktikum 1

### Pertanyaan dan Tugas

- Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua
link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

#### Controller/Page.php
```
<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title'   => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        $data = [
            'title'   => 'Halaman Kontak',
            'email'   => 'taufikhidayat3621@gmail.com',
            'alamat'  => 'Sukatani, Cikarang',
            'telepon' => '+62 812-8627-5726'
        ];

        return view('contact', $data);
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "Ini halaman Term of Services";
    }

    // Method untuk menampilkan daftar artikel
    public function artikel()
    {
        $artikelModel = new ArtikelModel();
        
        // Ambil semua artikel dan urutkan dari yang terbaru
        $data['artikel'] = $artikelModel->orderBy('id', 'DESC')->findAll();

        return view('artikel/index', $data);
    }
}
```
### Halaman About

![image](ss/ss1.png)

### Halaman Kontak

![image](ss/ss2.png)





## Praktikum 2
### Pertanyaan dan Tugas
- Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi

#### Konfigurasi koneksi database di file (.env)

- Hapus (#) pada text konfigurasi database(.env)

![image](ss/ss4.png)


#### Membuat Database: Studi Kasus Data Artikel

- Buat database
  
```
CREATE DATABASE lab_ci4;
```

- Buat Table

```
CREATE TABLE artikel (
 id INT(11) auto_increment,
 judul VARCHAR(200) NOT NULL,
 isi TEXT,
 gambar VARCHAR(200),
 status TINYINT(1) DEFAULT 0,
 slug VARCHAR(200),
 PRIMARY KEY(id)
);
```

- Membuat Model file baru pada direktori app/Models dengan nama ArtikelModel.php

![image](ss/ss3.png)

- Membuat Controller dengan nama Artikel.php pada direktori app/Controllers.

![image](ss/ss5.png)

- Membuat View, buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru
dengan nama index.php.

![image](ss/ss6.png)

- Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![image](ss/ss7.png)

- Membuat Tampilan Detail Artikel, tambahkan fungsi baru pada Controller Artikel dengan nama view().

![image](ss/ss8.png)

- Membuat View Detail, buatview baru untuk halaman detail dengan nama app/views/artikel/detail.php

![image](ss/ss9.png)

- Membuat Routing untuk artikel detail, buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail

![image[(ss/ss10.png)

- Membuat Menu Admin untuk proses CRUD data artikel. Buat method baru pada Controller
Artikel dengan nama admin_index().

![image](ss/ss11.png)

- Selanjutnya buat view di app/Views/artikel untuk tampilan admin dengan nama admin_index.php

![image](ss/ss12.png)

- Tambahkan routing untuk menu admin seperti berikut:

![image[(ss/ss10.png)

- Akses menu admin dengan url http://localhost:8080/admin/artikel

![image[(ss/ss13.png)

- Menambah Data Artikel, tambahkan fungsi/method baru pada Controller Artikel dengan nama add()

![image[(ss/ss14.png)

- Kemudian buat view untuk form tambah dengan nama form_add.php

![image[(ss/ss15.png)
