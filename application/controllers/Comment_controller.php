<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_controller extends CI_Controller
{
    private $data  = ["page" => "pages/comment"];

    public function index()
    {
        $this->load->view("index" , $this->data);
    }
}