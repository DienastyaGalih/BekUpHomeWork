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
class Employe extends CI_Model {

    private $name;
    private $id;
    private $telphoneNumber;
    private $city;
    private $sex;
    private $potitionWork;
    private $status;

    //put your code here
    Public function __construct() {
        parent::__construct();

//        $query = $this->db->get("stud"); 
//        $data['records'] = $query->result();
    }

    function setALL($rowResult) {
        $this->load->database();

        $this->name = $rowResult->nama;
//        echo 'nama sasa '.$this->name;
        $this->id = $rowResult->id_pegawai;
        $this->telphoneNumber = $rowResult->no_telp;
    }

    function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }

    function getTelphoneNumber() {
        return $this->telphoneNumber;
    }

    function getCity() {
        return $this->city;
    }

    function getSex() {
        return $this->sex;
    }

    function getPotitionWork() {
        return $this->potitionWork;
    }

    function getStatus() {
        return $this->status;
    }



}
