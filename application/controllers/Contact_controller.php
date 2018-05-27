<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Contact_controller extends CI_Controller
    {
        private $data = ["page" =>"pages/contact"];
        public function index()
        {
            $this->load->view('index' , $this->data);
        }
    }
