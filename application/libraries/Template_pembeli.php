<?php
class Template_pembeli
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_pembeli = null, $data = null)
    {
        if ($template_pembeli != null) {
            $data['header'] = $this->_ci->load->view('pembeli/_template/header', $data, true);
            $data['sidebar'] = $this->_ci->load->view('pembeli/_template/sidebar', $data, true);
            $data['topbar'] = $this->_ci->load->view('pembeli/_template/topbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_pembeli, $data, TRUE);
            $data['content'] = $this->_ci->load->view('pembeli/_template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('pembeli/_template/footer', $data, true);
            $data['js'] = $this->_ci->load->view('pembeli/_template/js', $data, true);

            echo $data['template_pembeli'] = $this->_ci->load->view('pembeli/_template/template_pembeli', $data, true);
        }
    }
}
