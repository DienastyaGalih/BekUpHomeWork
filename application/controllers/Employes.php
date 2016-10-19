<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employes
 *
 * @author User
 */
class Employes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function index() {
        $query = $this->db->get("pegawai");
        $data['records'] = $query->result();

        $employe['employe'][]=array();
        $count = 0;
        foreach ($query->result() as $row) {
            $employe['employe'][$count++] = (object) array(
                        'name' => $row->nama,
                        'id' => $row->id_pegawai,
                        'phone' => $row->no_telp);
        }

        $this->load->view('employeView', $employe);
    }

}
