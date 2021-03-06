<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
   
      function __construct() { 
            parent::__construct(); 
            $this->load->database(); 
         } 
   
    public function index()
    {
      $this->load->model("JRH_Model");
      $data['selected']="home";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("header",$data);
      $this->load->view("carousel");
      $this->load->view("services");
      $this->load->view("about");
      $this->load->view("footer",$data);
    }
    public function products()
    {

      $this->load->view("header");
      $this->load->view("products");
      $this->load->view("footer");
    }
    public function services()
    {
      $this->load->model("JRH_Model");
      $data['selected']="services";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("header",$data);
      $this->load->view("services",$data);
      $this->load->view("footer",$data);
    }
    public function installation()
    {
      $this->load->model("JRH_Model");
      $data['selected']="services";
      $data['query'] = $this->JRH_Model->getAllInstall();
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("header",$data);
      $this->load->view("installation",$data);
      $this->load->view("footer",$data);
    }
    public function repair()
    {
      $this->load->model("JRH_Model");
      $data['selected']="services";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("header",$data);
      $this->load->view("repair");
      $this->load->view("footer",$data);
    }
    public function clean()
    {
      $this->load->model("JRH_Model");
      $data['selected']="services";
      $data['query'] = $this->JRH_Model->getAllClean();
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("header",$data);
      $this->load->view("clean",$data);
      $this->load->view("footer",$data);
    }
    public function contact()
    {
      $this->load->model("JRH_Model");
      $data['selected']="contact";
      $data['contact'] = $this->JRH_Model->getContact();
      $this->load->view("header",$data);
      $this->load->view("contact");
      $this->load->view("footer",$data);
    }
 
}