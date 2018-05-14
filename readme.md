# kul-premtest-ina

Repositori ini berisi jawaban untuk Preliminary Test. Berikut merupakan daftar URL yang dapat diakses untuk menjalankan fungsi-fungsi jawaban preliminary test bagian algoritma dan basic coding:

#[Perhatian]
#Silahkan lakukan import database file kulinapremtest.sql

#Algoritma:
[GET] /prime/{max}
  => Algoritma 1
  => untuk menampilkan baris bilangan prima hingga [max]
  
[GET] /fibo/{max}
  => Algoritma 2
  => untuk menampilkan baris bilangan fibonacci hingga [max]
  
[GET] /zero/{number}
  => Algoritma 3
  => untuk menambahkan angka 0

#Basic Coding 1:
[POST] /create-review 
  => untuk mengisi tabel user_reviews, semua kolom harus diisi
  => sertakan nilai api_token dari tabel user

[GET] /review
  => untuk menampilkan semua user reviews;
  => sertakan nilai api_token dari tabel user
  
[GET] /show-review/{id}
  => untuk menampilkan user reviews tertentu berdasarkan id;
  => sertakan nilai api_token dari tabel user

[PUT] /update-review/{id}
  => untuk mengubah nilai pada beberapa kolom pada user reviews tertentu berdasarkan id;
  => sertakan nilai api_token dari tabel user

[DELETE] /delete-review/{id}
  => untuk menghapus user reviews tertentu berdasarkan id;
  => sertakan nilai api_token dari tabel user

#Basic Coding 2: Script DDL DML disimpan pada file kulinapremtest.sql
