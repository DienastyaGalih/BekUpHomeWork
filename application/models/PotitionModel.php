<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatusModel
 *
 * @author User
 */
class PotitionModel extends CI_Model {

    Public function __construct() {
        
    }

    /**
     * 
     * @param type $id is id of table posisi
     * @return type name of potition like ID Manager etc... :)
     */
    function getPotition($id) {
        $query = $this->db->query("SELECT  nama FROM `posisi` WHERE id_posisi=$id");
        return $query->result()[0]->nama;        
    }

}
