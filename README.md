Ini adalah dataset Faker yang digunakan untuk pengujian Database atau yang lainya.
Data ini bersifat terbuka dan siapa saja boleh menggunakan data ini untuk keperluan penelitian dan yang sejenisnya 

Cara untuk menggunakan dataset ini
Requarment
- PHP 7.2 atau diatasnya
- Database Mysql/MariaDB
- Postgres
- Composer

1. clone repositori : git clone 
2. cd /dataset
3. composer install
4. cp .envexample .env
5. setting koneksi sesuai dengan server masing-masing
6. php artisan migrate
7. php artisan db:seed

jumlah dataset
- 50.000 record
- 100.0000 record 
- 1.000.000 record
