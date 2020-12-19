<?php
defined("BASEPATH") or exit("error");

class Dashboard extends CI_controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->view("template/css");
        $this->load->view("template/head");
        $this->load->view("template/sidebar");
        $this->load->view("dashboard");
        $this->load->view("template/footer");
        $this->load->view("template/js");
    }
}
