<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model
{
    public function getAbout()
    {
        # poruku bi dobili za baze
        $poruka = "Cao ja sam Jelena";
        return $poruka;
    }

}