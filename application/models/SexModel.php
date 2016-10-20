<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SecModel
 *
 * @author User
 */
class SexModel extends CI_Model {

    Public function __construct() {
        
    }

    /**
     * 
     * @param type $id is id of jenis kelamin in table kelamin
     * @return type name of sex like laki laki or perempuan
     */
    function getSex($id) {
        $query = $this->db->query("SELECT  nama FROM `kelamin` WHERE id=$id");
        return $query->result()[0]->nama;
    }

}
