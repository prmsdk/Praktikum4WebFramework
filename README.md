# REST API dengan Codeigniter 3

REST, singkatan bahasa Inggris dari _Representational State Transfer_, adalah suatu gaya arsitektur perangkat lunak untuk untuk pendistibusian sistem hipermedia, sedangkan CodeIgniter merupakan aplikasi sumber terbuka yang berupa framework PHP dengan model MVC (Model, View, Controller) untuk membangun website dinamis dengan menggunakan PHP. Repository ini adalah penerapan REST API pada Codeigniter 3.

## Requirements (Kebutuhan)
- [PHP](https://php.net/) versi 5.6 atau lebih baru.
- [XAMPP](https://www.apachefriends.org/download.html) 7.2.28 atau lebih baru.
- [Codeigniter](https://codeigniter.com/en/download) versi 3.1.11
- [Visual Studio Code](https://code.visualstudio.com/download) ( an option for your text editor )

## Preparations (Persiapan)
1. Jalankan Webserver anda, dalam kasus ini yaitu XAMPP
2. Download atau Fork repository ini ke dalam htdocs anda, beri nama folder project dengan nama **Praktikum4WebFramework**
3. Tuliskan link berikut pada browser anda http://localhost/Praktikum4WebFramework/ dan menampilkan seperti :
![gambar_tampilan_welcome](https://lh3.googleusercontent.com/sHOXft-959Sbv42HCulAAgdQ3blqYHSok8Ky7CQtKRd_giTpUqyiyXstvmX5h7zm3hMGjD3Jjp0-gNDJx_ht-SLR-81uSfChcFOQTkRu93UetULSLhl3882nL_t9IFydGJL_fK6i6pkjB13vtTALHPNvDpVhZhVn-4AfjPP1i7xkcAG3KWmrE5VMu7J3IzVzehIKnJdvIxgovRNstxDP5urQi0sCGCwjCmSKWrIfdDHplPicPPXXB8dioa0T7hqUr7cq6ILH5Vo5rmk_vxprU0UhKedJ2RCOkrI_lQ86781M9VJIXkb2JadOaJGh5DzrLSmGFUxHyVA2-ciDpILbZ-i8yEQ49oaba775dU8w7ZFEMdp5zMVPxIGJcZjXu2bvMqpGqASHAJ6yZdiaHfAxit5XV6d2tKHLMxAQKd5TzEry9N6yCe34uvNnHSojY4HpjqGzSmrCW0K14FhQfsWsPrd3YRJRnaZeFzT-_rGAryHsGu-MOcFAdQzBS4Mcjr1uzxE6Jt-Xp7AIlayVWMWXwRxOTPK3WrpaKdCNPMoqfm8NwoUeiGWQQqJPlHIfE5ZIU0l6E4gxcCV46j_M7jS1eHW2qkNoiA2dfpxJ8rEsig1ojzSo_X0YM5kShmpd9fNI1i81ZFCzhxC-Tm4T49W2sr537LicNd60-BOKUilR9MDClQY=w1920-h349-no)


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

## Implementasi

1. Gunakan bantuan Postman untuk melakukan Get, Post, Put dan Delete, Install Postman dengan mengunduhnya [disini](https://www.postman.com/downloads/)
2. Buka Postman, tambahkan tab baru dengan menekan tombol + 
3. Masukkan link berikut http://localhost/Praktikum4WebFramework/index.php/kontak dan silahkan memanipulasi data yang telah terhubung dengan database.


## Keterangan
- Seluruh baris kode untuk memanipulasi data berada pada file `application/controllers/Kontak.php`

