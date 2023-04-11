# Lab5Web.

                                 # nama  : Amirul Mu'minin  
                                 # nim   : 312110109
                                 # Kelas : Ti.21.C2



- pendefinisian  dan pemanggilan class

![Screenshot (5)](https://user-images.githubusercontent.com/116171779/231131715-2b9d523a-afd4-4fd7-9857-f85b252396d0.png)

- penjelasanya :
* Pertama, kita mendefinisikan class "Mobil" dengan atribut "merk", "model", "tahun", dan "warna", serta method "getInfo", "jalan", dan "stop".
* Selanjutnya, kita membuat objek "mobil1" dan "mobil2" dari class "Mobil" menggunakan perintah "new".
* Kemudian, kita memanggil method "getInfo", "jalan", dan "stop" dari objek "mobil1" dan "mobil2", sehingga akan mengeluarkan output sesuai dengan method yang dipanggil.

- class library untuk form

![Screenshot (6)](https://user-images.githubusercontent.com/116171779/231137106-95910244-eec4-4ed8-b014-8e5a8638aeb2.png)

- penjelasannya :
* pertama,kita membuat halaman HTML dengan form input data mahasiswa.
* Form memiliki method "post" dan action "proses.php", sehingga data yang diinputkan akan dikirim ke halaman "proses.php" untuk diproses lebih lanjut.
* Form memiliki empat input field untuk menginputkan data mahasiswa, yaitu nama, NIM, jurusan, dan semester.
* Terakhir, form memiliki tombol "Submit" untuk mengirimkan data yang telah diinputkan.

- implementasi pemanggilan class library dari form

![Screenshot (7)](https://user-images.githubusercontent.com/116171779/231140064-438cb099-ac01-461e-a325-2030c33b986d.png)

- penjelasannya :
* pertama,kita mengakses data yang telah diinputkan menggunakan variabel $_POST.
* Kita menyimpan data tersebut ke dalam variabel masing-masing, yaitu $nama, $nim, $jurusan, dan $alamat.
* Terakhir, kita menampilkan data yang telah diinputkan menggunakan perintah "echo".


- koneksi database 

![Screenshot (8)](https://user-images.githubusercontent.com/116171779/231141519-fa1d8f6e-5f61-45df-8e59-2e16c6b173c9.png)

- penjelasannya :
* mendefinisikan variabel untuk nama server, nama pengguna database, password pengguna database, dan nama database.
* Kemudian, kita menggunakan fungsi mysqli_connect untuk membuat koneksi ke database MySQL.
* Fungsi mysqli_connect memerlukan empat parameter, yaitu nama server, nama pengguna database, password pengguna database, dan nama database.
* Selanjutnya, kita mengecek apakah koneksi berhasil atau gagal menggunakan if statement.
* Jika koneksi gagal, maka program akan menampilkan pesan error menggunakan fungsi mysqli_connect_error().
* Jika koneksi berhasil, maka program akan menampilkan pesan "Koneksi berhasil" pada halaman web.
