<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About_controller extends CI_Controller
{
    private $data = ["page" =>"pages/about"];

    public function index()
    {
        $this->load->model("about_model");
        #$porukica = $this->about_model->getAbout();
        $this->data['poruka'] = $this->about_model->getAbout();

        $this->load->view("index" , $this->data);
    }
}