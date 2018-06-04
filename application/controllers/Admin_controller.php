<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{
    private $data = ["page" => "pages/admin"];
    public function index()
    {
        $this->load->view("index", $this->data);
    }
    public function dodaj_apartman()
    {
        $this->data["page"] = "pages/admin/apartmani";
        $this->load->view("index", $this->data);
    }
    public function obrisi_apartman()
    {
        $this->data["page"] = "pages/admin/apartmani";
        $this->load->view("index", $this->data);
    }

    public function dodaj_activiti()
    {
        $this->data["page"] = "pages/admin/activities";
        $this->load->view("index" , $this->data);
    }

    public function obrisi_activiti()
    {
        $this->data["page"] = "pages/admin/activities";
        $this->load->view("index" , $this->data);
    }
}
