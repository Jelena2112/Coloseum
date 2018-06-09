<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getAll()
    {
        $rezultat = $this->db->get('users'); // SELECT * FROM users
        return $rezultat->result();
    }

    public function get($ime)
    {
        $query      = ['name' => $ime]; // SELECT * FROM users WHERE name = $ime
        $rezultat   = $this->db->get_where('users',$query);

        if($rezultat->num_rows() < 1 )
            return "Nije pronadjen korisnik  $ime";


        return $rezultat->result();
    }



}