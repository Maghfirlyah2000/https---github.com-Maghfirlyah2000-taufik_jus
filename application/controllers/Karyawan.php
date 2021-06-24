<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Akses_model');
        $this->load->model('Menu_model');
        $this->load->model('Kasbon_model');
        $this->load->model('BarangHabis_model');
        $this->load->model('Kategori_model');
        $this->load->model('Pembeli_model');
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $this->template_karyawan->views('karyawan/dash_karyawan');
    }
    public function data_menu()
    {
        $data['data_menu'] = $this->Menu_model->getAll()->result();
        $this->template_karyawan->views('karyawan/data_menu', $data);
    }
    public function tambah_menu()
    {
        $this->template_karyawan->views('karyawan/tambah_menu');
    }
    public function input_menu()
    {
        $kode_minuman = $this->input->post('kode_minuman');

        $nama_minuman = $this->input->post('nama_minuman');

        $harga = $this->input->post('harga');

        $id_kategori_jus = $this->input->post('id_kategori_jus');


        $data = array(
            'kode_minuman' => $kode_minuman,
            'nama_minuman' => $nama_minuman,
            'harga' => $harga,
            'id_kategori_jus' => $id_kategori_jus
        );
        $this->Menu_model->input_data($data, 'db_data_menu');
        redirect('Karyawan/data_menu');
    }
    public function edit_menu($id_menu)
    {
        $where = array('id_menu' => $id_menu);
        $data['id_menu'] = $this->Menu_model->edit_data($where, 'db_data_menu')->result();
        $this->template_karyawan->views('karyawan/edit_menu', $data);
    }
    public function update_menu()
    {
        $id_menu = $this->input->post('id_menu');
        $kode_minuman = $this->input->post('kode_minuman');
        $nama_minuman = $this->input->post('nama_minuman');
        $harga = $this->input->post('harga');
        $id_kategori_jus = $this->input->post('id_kategori_jus');

        $data = array(
            'kode_minuman' => $kode_minuman,
            'nama_minuman' => $nama_minuman,
            'harga' => $harga,
            'id_kategori_jus' => $id_kategori_jus
        );

        $where = array(
            'id_menu' => $id_menu
        );

        $this->Menu_model->update_data($where, $data, 'db_data_menu');
        redirect('karyawan/data_menu');
    }
    public function hapus_menu($id_menu)
    {
        $where = array('id_menu' => $id_menu);
        $this->Menu_model->hapus_data($where, 'db_data_menu');
        redirect('karyawan/data_menu');
    }
    public function casbon()
    {
        $data['casbon'] = $this->Kasbon_model->getAll()->result();
        $this->template_karyawan->views('karyawan/casbon', $data);
    }
    public function db_habis()
    {
        $data['db_habis'] = $this->BarangHabis_model->getAll()->result();
        $this->template_karyawan->views('karyawan/db_habis', $data);
    }
    public function tambah_barang()
    {
        $this->template_karyawan->views('karyawan/tambah_barang');
    }
    public function input_barang()
    {
        $tanggal = $this->input->post('tanggal');

        $nama_barang = $this->input->post('nama_barang');

        $harga_beli = $this->input->post('harga_beli');

        $stok = $this->input->post('stok');


        $data = array(
            'tanggal' => $tanggal,
            'nama_barang' => $nama_barang,
            'harga_beli' => $harga_beli,
            'stok' => $stok
        );
        $this->BarangHabis_model->input_data($data, 'db_barang_habis');
        redirect('Karyawan/db_habis');
    }
    public function hapus_barang($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $this->BarangHabis_model->hapus_data($where, 'db_barang_habis');
        redirect('karyawan/db_habis');
    }
    public function dk_pelanggan()
    {
        $this->template_karyawan->views('karyawan/dk_pelanggan');
    }
    public function input_pelanggan()
    {
        $nama = $this->input->post('nama');

        $jenkel = $this->input->post('jenkel');

        $alamat = $this->input->post('alamat');

        $telp = $this->input->post('telp');


        $data = array(
            'nama' => $nama,
            'jenkel' => $jenkel,
            'alamat' => $alamat,
            'telp' => $telp
        );
        $this->Pembeli_model->input_data($data, 'db_detail_pembeli');
        redirect('Karyawan/data_pelanggan');
    }
    public function data_pelanggan()
    {
        $data['data_pelanggan'] = $this->Pembeli_model->getAll()->result();
        $this->template_karyawan->views('karyawan/data_pelanggan', $data);
    }
    public function transaksi()
    {
        $data['transaksi'] = $this->Transaksi_model->getAll()->result();
        $this->template_karyawan->views('karyawan/transaksi', $data);
    }
}
