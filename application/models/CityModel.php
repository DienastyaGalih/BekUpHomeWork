<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CityModel
 *
 * @author User
 */
class CityModel extends CI_Model {

    //put your code here
    Public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    /**
     * 
     * @param type $id of city in table kota
     * @return type return name of city
     */
    function getCity($id) {
        $query = $this->db->query("SELECT nama as name FROM kota WHERE id=$id");
        return   $query->result()[0]->name; ;
    }

}
