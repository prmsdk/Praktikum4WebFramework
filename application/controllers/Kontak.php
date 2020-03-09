<?php
// baris kode berikut berfungsi agar tak dapat mengakses langsung controller
defined('BASEPATH') OR exit('No direct script access allowed');

// mengimpor library/pustaka file REST_Controller.php
require APPPATH . '/libraries/REST_Controller.php';
// menggunakan class REST_Controller dan menjadikannya extend
use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller {

    // Sebuah fungsi yang dijalankan pertama kali secara otomatis, berfungsi untuk memuat database
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

  //Menampilkan data kontak
  function index_get() {
    // mengambil id pada link menggunakan method get
      $id = $this->get('id');

    // jika ada id, akan menampilkan kontak sesuai id. jika tidak ada, akan menampilkan semua baris pada tabel telepon
      if ($id == '') {
          $kontak = $this->db->get('telepon')->result();
      } else {
          $this->db->where('id', $id);
          $kontak = $this->db->get('telepon')->result();
      }

    //   tampilkan data pada variabel kontak
      $this->response($kontak, 200);
  }

  //Menyimpan data kontak baru
  function index_post() {
    //   Merekam data yang dimasukkan ke dalam array
      $data = array(
                  'id'       => $this->post('id'),
                  'nama'     => $this->post('nama'),
                  'nomor'    => $this->post('nomor'));
    // melakukan insert data ke database
      $insert = $this->db->insert('telepon', $data);

    //   jika berhasil, tampilkan data baru. jika gagal, tampilkan status fail
      if ($insert) {
          $this->response($data, 200);
      } else {
          $this->response(array('status' => 'fail', 502));
      }
  }

  //Memperbarui data kontak yang telah ada
  function index_put() {
    //   mengambil variabel id dengan method put
    $id = $this->put('id');
    // merekam data yang dimasukkan ke dalam array
    $data = array(
                'id'       => $this->put('id'),
                'nama'     => $this->put('nama'),
                'nomor'    => $this->put('nomor'));
    
    // merekam id pada method where
    $this->db->where('id', $id);
    // melakukan update pada tabel telepon, dengan values $data, where -> $where
    $update = $this->db->update('telepon', $data);

    // jika update berhasil, tampilkan data yang telah diubah, jika gagal, tampilkan laporan fail
    if ($update) {
        $this->response($data, 200);
    } else {
        $this->response(array('status' => 'fail', 502));
    }
  }

  //Menghapus salah satu data kontak
  function index_delete() {
    // merekam id yang dimasukkan dengan method delete
    $id = $this->delete('id');
    // merekam id pada method where
    $this->db->where('id', $id);
    // menghapus satu baris data pada tabel telepon, berdasarkan id yang disimpan pada method where
    $delete = $this->db->delete('telepon');

    // jika berhasil menghapus data, maka tampilkan sukses, jika tidak tampilkan fail
    if ($delete) {
        $this->response(array('status' => 'success'), 201);
    } else {
        $this->response(array('status' => 'fail', 502));
    }
  }
}
