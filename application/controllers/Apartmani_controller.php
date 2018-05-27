<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apartmani_controller extends CI_Controller
{
    private $data = ["page" => "pages/apartmani"];
    public function index()
    {
        $this->load->view("index", $this->data);
    }
}