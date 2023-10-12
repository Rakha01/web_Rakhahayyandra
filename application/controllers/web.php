<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_controller{

    function _construct()
    {
        parent::_construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Home";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function blog()
    {
        $data['judul'] = "blog";
        $this->load->view('v_header', $data);
        $this->load->view('v_blog', $data);
        $this->load->view('v_footer', $data);
    }

    public function about()
    {
        $data['judul'] = "about";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
}