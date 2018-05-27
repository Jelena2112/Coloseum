<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{
    private $data = ["page" => "pages/admin"];
    public function index()
    {
        $this->load->view("index", $this->data);
    }
}