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
     * Controller for the first view of web page
     */
    public function index() {
        $this->load->model("CityModel");
        $employe['employe'][]=array();
        $this->load->model('EmployeModel');
        $employe=$this->EmployeModel->selectEmployee();

        $this->load->view('EmployeView', $employe);
    }

}
