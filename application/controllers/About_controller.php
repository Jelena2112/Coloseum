<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About_controller extends CI_Controller
{
    private $data = ["page" =>"pages/about"];

    public function index()
    {
        $this->load->view("index" , $this->data);
    }
}