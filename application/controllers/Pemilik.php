<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->model('Pembeli_model');
    }

    public function index()
    {
        $this->template_pemilik->views('pemilik/dash_pemilik');
    }
    public function data_menu()
    {
        $data['data_menu'] = $this->Menu_model->getAll()->result();
        $this->template_pemilik->views('pemilik/data_menu', $data);
    }
    public function tambah_menu()
    {
        $this->template_pemilik->views('pemilik/tambah_menu');
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
        redirect('pemilik/data_menu');
    }
    public function edit_menu($id_menu)
    {
        $where = array('id_menu' => $id_menu);
        $data['data_menu'] = $this->Menu_model->edit_data($where, 'db_data_menu')->result();
        $this->template_pemilik->views('pemilik/edit_menu', $data);
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
        redirect('pemilik/data_menu');
    }
    public function hapus_menu($id_menu)
    {
        $where = array('id_menu' => $id_menu);
        $this->Menu_model->hapus_data($where, 'db_data_menu');
        redirect('pemilik/data_menu');
    }
    public function data_pembeli()
    {
        $data['data_pembeli'] = $this->Pembeli_model->getAll()->result();
        $this->template_pemilik->views('pemilik/data_pembeli', $data);
    }
}
