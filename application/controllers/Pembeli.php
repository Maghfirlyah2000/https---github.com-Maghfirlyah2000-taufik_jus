<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembeli extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembeli_model');
    }

    public function index()
    {
        $this->template_pembeli->views('pembeli/dash_pembeli');
    }

    public function menu_mix()
    {
        $data['mix'] = $this->Pembeli_model->getAll()->result();
        $this->template_pembeli->views('pembeli/mix');
    }
}
