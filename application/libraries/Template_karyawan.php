<?php
class Template_karyawan
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_karyawan = null, $data = null)
    {
        if ($template_karyawan != null) {
            $data['header'] = $this->_ci->load->view('karyawan/_template/header', $data, true);
            $data['sidebar'] = $this->_ci->load->view('karyawan/_template/sidebar', $data, true);
            $data['topbar'] = $this->_ci->load->view('karyawan/_template/topbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_karyawan, $data, TRUE);
            $data['content'] = $this->_ci->load->view('karyawan/_template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('karyawan/_template/footer', $data, true);
            $data['js'] = $this->_ci->load->view('karyawan/_template/js', $data, true);

            echo $data['template_karyawan'] = $this->_ci->load->view('karyawan/_template/template_karyawan', $data, true);
        }
    }
}
