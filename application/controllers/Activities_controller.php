<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activities_controller extends CI_Controller
{
    private $data = ["page" =>"pages/activities"];

    public function index()
    {
        $this->load->view("index" , $this->data);
    }
}