
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_controller extends CI_Controller
{

    public function getUsers()
    {
        $this->load->model('user_model');

        $data = $this->user_model->getAll();
        var_dump($data);

    }

    public function getUser($ime)
    {
        $this->load->model('user_model');
        $data = $this->user_model->get($ime);
        var_dump($data);
    }
}
