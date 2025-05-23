# TP10DPBO2025C2

# JANJI
Saya Faiz Bayu Erlangga dengan NIM 2311231 mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## TABEL RELASI
![image](https://github.com/user-attachments/assets/b7a6107d-d7a9-4a60-b45e-2923c3092505)

## DESAIN PROGRAM
Program ini berisikan data pemain bola dalam suatu klub di dunia. Dalam pemograman ini menggunakan konsep MVVM (Model, View, View Model), dimana memiliki peran dan fungsi yang berbeda beda. 

A. Struktur File

1. Model
   - Klub.php
   - Pemain.php
   - Posisi.php
2. View Model
   - KlubViewModel.php
   - PemainViewModel.php
   - PosisiViewModel.php
3. View
   - addKlubView.php
   - addPemainView.php
   - addPosisiView.php
   - editKlubView.php
   - editPemainView.php
   - editPosisiView.php
   - KlubView.php
   - PemainView.php
   - PosisiView.php
   - Template
       - Header.php
4. Config
   - Database.php
5. Database
   - pemain_bola.php
6. Index.php

B. Penjelasan MVVM

MVVM (Model-View-ViewModel) adalah arsitektur perangkat lunak yang memisahkan logika bisnis, logika tampilan, dan antarmuka pengguna agar lebih modular, mudah diuji, dan dikelola.

1. Model
   
Fungsi: Berisi representasi data dan logika interaksi dengan database.

Tugas: Mengelola query SQL (SELECT, INSERT, UPDATE, DELETE).
Terhubung langsung dengan PDO dari Database.php.

Contoh: Klub::getAll() akan mengambil semua data klub dari database.

3. ViewModel
   
Fungsi: Menjadi penghubung antara Model dan View.

Tugas:
- Memproses input dari user (validasi, sanitasi).
- Memanggil method dari Model.
- Mengirim data ke View.
- 
Contoh: KlubViewModel::addKlub() memproses input form dan memanggil Klub::create().

3. View
   
Fungsi: Menampilkan antarmuka pengguna.

Tugas:
- Menampilkan data ke user.
- Menyediakan form input.
- Menggunakan variabel yang dikirim dari ViewModel.
  
Contoh: KlubView.php menampilkan daftar klub dari $KlubList.

4. Config
   
File: Database.php

Menyediakan koneksi PDO yang digunakan oleh semua model.

6. Entry Point
   
File: index.php

Mengatur routing berdasarkan parameter URL seperti ?entity=klub&action=edit.

C. Alur Kerja MVVM:

Misalnya user mengakses halaman daftar klub:
1. View (KlubView.php) ditampilkan.
2. View ini memanggil ViewModel (KlubViewModel.php) untuk mendapatkan data klub.
3. ViewModel memanggil method getAll() dari Model (Klub.php).
4. Model melakukan query ke database dan mengembalikan data.
5. ViewModel meneruskan data ke View.
6. View menampilkannya di tabel HTML.

D. Database

- Nama Database : pemain_bola
- Tabel:
1. Pemain
   - id_pemain(int) PK
   - nama_pemain (varchar)
   - usia (int)
   - asal_negara (varchar)
   - id_klub (int) FK
   - id_posisi (int) FK
   - harga_pasar (decimal)
  
2. Klub
   - id_klub(int) PK
   - nama_klub (varchar)
   - benua_klub (varchar)
  
3. Posisi
   - id_posisi(int) PK
   - nama_posisi

## ALUR PROGRAM
1. User membuka halaman utama
- User membuka: index.php?entity=klub&action=view
- View KlubView.php di-load.
- Objek KlubViewModel dibuat → memanggil Model/Klub untuk mengambil semua data klub.
- Data klub dikembalikan ke View dan ditampilkan dalam tabel HTML.

2. User menambahkan klub baru
- User klik tombol “+ Tambah Klub” → membuka addKlubView.php.
- Form input klub ditampilkan.
- User mengisi nama klub dan benua, lalu klik Submit.
- Form dikirim via POST ke index.php?entity=klub&action=add.

Proses setelah submit:
- index.php mengecek data POST.
- Objek KlubViewModel dibuat → memanggil bindInput() dan addKlub().
- KlubViewModel meneruskan ke Model/Klub → fungsi create() dipanggil.
- Model menjalankan query untuk menyimpan data ke database.
- Setelah berhasil, user diarahkan kembali ke halaman daftar klub (KlubView.php).

3. User mengedit data klub
- User klik tombol Edit → membuka editKlubView.php?id=2.
- KlubViewModel dibuat dan mengambil data klub dengan ID=2 dari Model/Klub.
- Data ditampilkan dalam form HTML.
- User mengubah data, lalu klik Update.

Proses setelah klik update:
- Form dikirim ke index.php?entity=klub&action=update&id=2 (via POST).
- KlubViewModel memanggil updateKlub() dan meneruskan ke Model/Klub.
- Model menjalankan query untuk memperbarui data klub di database.

Setelah sukses, user kembali ke halaman utama (KlubView.php).

4. User menghapus data klub
- User klik tombol Hapus pada salah satu klub.
- Konfirmasi ditampilkan. Jika disetujui:
- Browser memanggil: index.php?entity=klub&action=delete&id=2

Proses setelah klik hapus:
- index.php memanggil deleteKlub() dari KlubViewModel.
- KlubViewModel meneruskan ke Model/Klub → fungsi delete() dipanggil.
- Model menjalankan query SQL DELETE untuk menghapus data klub dari database.
- Setelah penghapusan, user kembali ke halaman utama (KlubView.php).

Sama seperti halnya untuk:
- PemainViewModel → Model/Pemain → View Pemain
- PosisiViewModel → Model/Posisi → View Posisi

## DOKUMENTASI
https://github.com/user-attachments/assets/02cae49b-a1ce-4e2a-bae8-24d4b41e34c6

