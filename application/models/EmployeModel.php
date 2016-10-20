<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Emplyee
 *
 * @author User
 */
class EmployeModel extends CI_Model {

    //put your code here
    Public function __construct() {
        parent::__construct();
        $this->load->model("CityModel");
    }

    function selectEmployee() {
        $query = $this->db->get("pegawai");
        $data['records'] = $query->result();

        $employe['employe'][] = array();
        $count = 0;
        foreach ($query->result() as $row) {
            
            

            
            $employe['employe'][$count++] = (object) array(
                        'name' => $row->nama,
                        'id' => $row->id_pegawai,
                        'city' => $this->CityModel->getCity($row->kota),
                        'phone' => $row->no_telp);
        }
        
        return $employe;
    }

}
