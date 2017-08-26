<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class en extends CI_Controller {
   
      function __construct() { 
            parent::__construct(); 
            $this->load->database(); 
         } 
   
    public function index()
    {
      $this->load->model("JRH_Model");
      $data['selected']="home";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("headeren",$data);
      $this->load->view("carouselen");
      $this->load->view("servicesen");
      $this->load->view("abouten");
      $this->load->view("footeren",$data);
    }
    public function products()
    {

      $this->load->view("headeren");
      $this->load->view("products");
      $this->load->view("footeren");
    }
    public function services()
    {
      $this->load->model("JRH_Model");
      $data['selected']="services";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("headeren",$data);
      $this->load->view("servicesen",$data);
      $this->load->view("footeren",$data);
    }
    public function installation()
    {
      $this->load->model("JRH_Model");
      $data['selected']="servicesen";
      $data['query'] = $this->JRH_Model->getAllInstall();
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("headeren",$data);
      $this->load->view("installationen",$data);
      $this->load->view("footeren",$data);
    }
    public function repair()
    {
      $this->load->model("JRH_Model");
      $data['selected']="servicesen";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("headeren",$data);
      $this->load->view("repairen");
      $this->load->view("footeren",$data);
    }
    public function clean()
    {
      $this->load->model("JRH_Model");
      $data['selected']="servicesen";
      $data['query'] = $this->JRH_Model->getAllClean();
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("headeren",$data);
      $this->load->view("cleanen",$data);
      $this->load->view("footeren",$data);
    }
    public function contact()
    {
      $this->load->model("JRH_Model");
      $data['selected']="contact";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("headeren",$data);
      $this->load->view("contacten");
      $this->load->view("footeren",$data);
    }
 
}