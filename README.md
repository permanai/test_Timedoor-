# test_Timedoor-
langkah-langkah install:
1. unduh file github.
2. jalankan php artisan migrate
3. jalankan php artisan db:seed --class=RoleSeeder
4. jalankan php artisan db:seed --class=DatabaseSeeder
5. jika dirasa loading untuk faker lama bisa diubah jumlah fakernya di file database/seeders/databaseseeder pada bagian kategori, buku atau rating.
6. lakukan login, sebagai admin: email=admin@gmail.com dan password=password
7. jika login sebagai user: email= bisa di cek pada bagian tabel users pada kolom email (pilih salah satu), dan password=password
8. jika ingin menambahkan rating harus login sebagai user.
