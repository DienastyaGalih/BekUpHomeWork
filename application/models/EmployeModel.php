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
        $this->load->model("PotitionModel");
        $this->load->model("SexModel");
    }

    /**
     * Change variable to easy to rememnber variable when implement in EmployeView
     * @return type variable of object employee. 
     * all use human conversation like name of city not id of city
     */
    function selectEmployee() {
        $query = $this->db->get("pegawai");
        $data['records'] = $query->result();

        $employe['employe'][] = array();
        $count = 0;
        foreach ($query->result() as $row) {
            $employe['employe'][$count++] = (object) array(
                        'name' => $row->nama,
                        'id' => $row->id_pegawai,
                        'sex' => $this->SexModel->getSex($row->kelamin),
                        'potition' => $this->PotitionModel->getPotition($row->id_posisi),
                        'status' => $row->status,
                        'city' => $this->CityModel->getCity($row->kota),
                        'phone' => $row->no_telp);
        }

        return $employe;
    }

    function selectEmployeeById( $idUser) {
        $this->db->select("* ");
        $this->db->from("pegawai");
        $this->db->where("id_pegawai", $idUser);
        $query = $this->db->get();

        $employe['employe'][] = array();
        $count = 0;
        foreach ($query->result() as $row) {
            $employe['employe'][$count++] = (object) array(
                        'name' => $row->nama,
                        'id' => $row->id_pegawai,
                        'sex' => $this->SexModel->getSex($row->kelamin),
                        'potition' => $this->PotitionModel->getPotition($row->id_posisi),
                        'status' => $row->status,
                        'city' => $this->CityModel->getCity($row->kota),
                        'phone' => $row->no_telp);
        }

        return $employe;
    }

    function selectEmployeeByIdsd($idUser) {
        $this->db->select("* ");
        $this->db->from("pegawai");
        $this->db->where("id_pegawai", $idUser);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            return array(
                'name' => $row->nama,
                'id' => $row->id_pegawai,
                'sex' => $this->SexModel->getSex($row->kelamin),
                'potition' => $this->PotitionModel->getPotition($row->id_posisi),
                'city' => $this->CityModel->getCity($row->kota),
                'status' => $row->status,
                'phone' => $row->no_telp);
        }
    }

    function addEmploye($data) {
        if ($this->db->insert("pegawai", $data)) {
            return true;
        }
        return false;
    }

    function updateEmploye($data, $idUser) {
        echo 'use id' . $idUser;
        $this->db->set($data);
        $this->db->where("id_pegawai", $idUser);
        $this->db->update("pegawai", $data);
    }

    function deleteEmploye($idUser) {
        if ($this->db->delete("pegawai", "id_pegawai = " . $idUser)) {
            return true;
        }
        return false;
    }

}
