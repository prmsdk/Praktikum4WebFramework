# REST API dengan Codeigniter 3

REST, singkatan bahasa Inggris dari _Representational State Transfer_, adalah suatu gaya arsitektur perangkat lunak untuk untuk pendistibusian sistem hipermedia, sedangkan CodeIgniter merupakan aplikasi sumber terbuka yang berupa framework PHP dengan model MVC (Model, View, Controller) untuk membangun website dinamis dengan menggunakan PHP. Repository ini adalah penerapan REST API pada Codeigniter 3.

## Requirements (Kebutuhan)
- [PHP](https://php.net/) versi 5.6 atau lebih baru.
- [XAMPP](https://www.apachefriends.org/download.html) 7.2.28 atau lebih baru.
- [Codeigniter](https://codeigniter.com/en/download) versi 3.1.11
- [Visual Studio Code](https://code.visualstudio.com/download) ( an option for your text editor )

## Prepare (Persiapan)
1. Jalankan Webserver anda, dalam kasus ini yaitu XAMPP
2. Download atau Fork repository ini ke dalam htdocs anda, beri nama folder project dengan nama **Praktikum4WebFramework**
3. Tuliskan link berikut pada browser anda http://localhost/Praktikum4WebFramework/ hingga muncul tampilan seperti:

![enter image description here](https://lh3.googleusercontent.com/rS3FD0RfXGNXyVdaoUcACuPYIyVsM5V4XUjBOkdy-JFT8G0X6jgYcJu8E5n3uBWO1HbpKUvYde3EbVtlBzSagFYz1JG3WaKm6vQon8ZXIiHYRR2r-cuWYorHiN-L7FRNkC4qDd2I8rg3IWsVyPhch2h4mWR1VEAfGG5D8SWc59WgER821K4_Le88ZR6N1Si77NxIDEv9JeT9l5DGk1ew3jO52Vmd7F8L7BToaxedXO8wmz4cJl6kEF59a1PbxPmro0c9qZYFkE8-au019SXz86sIDsFfXdOeiG7BfBmwJeBXmes3Jwy5jCuiE1L8Oo55sq-WETcYhD6lFXGO2HBOnMfZwfxxYO3iG-xkC-UCJFlCcPFIh0xXBwsrq_UtyucgodfGkd1zDUAoNiVD3c60ckpZZeNhgWOIjvWkGyCuBEUV8anFTEClnKLLP_Bdg0rT-Tcn_8OvAFpMw93XD12flVgQtvZZ6Euv9wZqTnFZPfkDezcKDzBGteiMXbch24mxNAmYb9PMKh-u9oYmCxYvh5-FrBuGMD8hAnZIosmaCgEAwYwUzI7-5JTrHDAoHnCZUgeORu69QwWDA6cQrVZbJ02Y1tzQQ4uSXQY4ZZzXnkpCugQQu_-RDSsOvycLNaF1kWX4r2ZkxGS1t55kQjO1ZDA8ajj58rTSgwikSYis33PKyNs=w1920-h349-no)
4. Buat database baru bernama **kontak**, dan import file `kontak.sql` ke dalam database tersebut <br>
5. Pastikan kode pada file `application/config/database.php` telah sama seperti baris kode berikut :
``` php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'kontak',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

## Implementations

1. Gunakan bantuan Postman untuk melakukan Get, Post, Put dan Delete, Install Postman dengan mengunduhnya [disini](https://www.postman.com/downloads/)
2. Buka Postman, tambahkan tab baru dengan menekan tombol + 
3. Masukkan link berikut http://localhost/Praktikum4WebFramework/index.php/kontak dan silahkan memanipulasi data yang telah terhubung dengan database.


## Keterangan
- Seluruh baris kode untuk memanipulasi data berada pada file `application/controllers/Kontak.php`

