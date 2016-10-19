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

//    
//    function __construct() { 
//         parent::__construct(); 
//         $this->load->helper('url'); 
//         $this->load->database(); 
//      } 
//      
//    //put your code here
//    public function index() {
//        echo "Hello World!";
//    }

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function getAllEmployee() {


        $query = $this->db->get("pegawai");
        $data['records'] = $query->result();

        $r = $data['records'];

        $employesArray [] = array();
        $counting = 0;

//        for ($counting = 0; $counting < 2; $counting++) {
//            echo $counting;
//        }

        foreach ($query->result() as $row) {
            $employe = new Employe();

//            echo $employesArray[$counting]->getName();
            $employesArray[$counting] = $employe->setALL($row);
            
            echo "hahah  ".$employesArray[$counting];
            $counting++;
//            echo $row->nama;
//            echo $row->id_pegawai;
//            echo $row->no_telp;
        }
//            echo $row->nama;
//            echo $row->id_pegawai;
//            echo $row->no_telp;
        return $employesArray;
    }

    public function index() {

        $query = $this->db->get("pegawai");
        $data['records'] = $query->result();
//
//        $r = $data['records'];
//
        foreach ($query->result() as $row) {
            echo $row->nama;
            echo $row->id_pegawai;
            echo $row->no_telp;
        }

//        $this->load->model('Employe');
//        $employesArray['records'] = $this->getAllEmployee();
//
//        foreach ($employesArray['records'] as $r) {
//            echo "p";
//        }

//         $this->load->helper('url'); 
        $this->load->view('employee_view', $data);
    }

}
