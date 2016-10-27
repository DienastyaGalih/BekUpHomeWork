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
class EmployeController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    /**
     * display view to edit employee
     */
    public function editEmployeView() {
        $this->load->model("CityModel");
        $employe['employe'][] = array();
        $this->load->model('EmployeModel');
        $idUser = $this->uri->segment('3');
        $employe = $this->EmployeModel->selectEmployeeById($idUser);
        $tp['employe'] = $employe['employe'][0];
        $this->load->helper('form');
        $this->load->view('EmployeEditView', $tp);
    }

    /**
     * Controller for the first view of web page
     */
    public function index() {
        $this->showHome();
//        $this->load->model("CityModel");
//        $employe['employe'][] = array();
//        $this->load->model('EmployeModel');
//        $employe = $this->EmployeModel->selectEmployee();
//
//        $this->load->view('EmployeView', $employe);
    }

    public function addEmployeView() {
        $this->load->helper('form');
        $this->load->view('EmployeAddView');
    }

    public function deleteEmploye() {
        $this->load->model('EmployeModel');
        $ideUser = $this->uri->segment('3');
        echo $ideUser;
        $this->EmployeModel->deleteEmploye($ideUser);
        $this->showHome();
    }

    public function addEmploye() {
        $this->load->model('EmployeModel');

        $data = array(
            'nama' => $this->input->post('name'),
            'no_telp' => $this->input->post('phone'),
            'kota' => $this->input->post('city'),
            'kelamin' => $this->input->post('sex'),
            'id_posisi' => $this->input->post('potition'),
            'status' => $this->input->post('status'),
        );

        $this->EmployeModel->addEmploye($data);

        $this->showHome();
    }

    public function editEmploye() {
        $this->load->model('EmployeModel');

        $data = array(
            'nama' => $this->input->post('name'),
            'no_telp' => $this->input->post('phone'),
            'kota' => $this->input->post('city'),
            'kelamin' => $this->input->post('sex'),
            'id_posisi' => $this->input->post('potition'),
            'status' => $this->input->post('status'),
        );
        $idUser = $this->input->post('id');
        $this->EmployeModel->updateEmploye($data, $idUser);
        $this->showHome();
    }

    public function showHome() {
        $employe['employe'][] = array();
        $this->load->model('EmployeModel');
        $employe = $this->EmployeModel->selectEmployee();
        $this->load->view('EmployeView', $employe);
    }

}
