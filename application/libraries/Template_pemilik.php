<?php
class Template_pemilik
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_pemilik = null, $data = null)
    {
        if ($template_pemilik != null) {
            $data['header'] = $this->_ci->load->view('pemilik/_template/header', $data, true);
            $data['sidebar'] = $this->_ci->load->view('pemilik/_template/sidebar', $data, true);
            $data['topbar'] = $this->_ci->load->view('pemilik/_template/topbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_pemilik, $data, TRUE);
            $data['content'] = $this->_ci->load->view('pemilik/_template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('pemilik/_template/footer', $data, true);
            $data['js'] = $this->_ci->load->view('pemilik/_template/js', $data, true);

            echo $data['template_pemilik'] = $this->_ci->load->view('pemilik/_template/template_pemilik', $data, true);
        }
    }
}
