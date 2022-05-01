<?php
class Dashboard Extends CI_Controller{
    public function index()
    {
        $this->m_squrity->getSqurity();
        $isi['content'] ='v_home';
        $isi['judul']   = 'Home';
        $this->load->view('v_dashboard',$isi);
    }
}
?>