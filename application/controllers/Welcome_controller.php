<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_controller extends CI_Controller
{
    private $data = ["page" => "pages/home"];
	public function index()
	{
		$this->load->view('index', $this->data);
	}
}
