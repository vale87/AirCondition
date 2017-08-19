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
	    $this->load->view("header");
          $this->load->view("carousel");
          $this->load->view("services");
          $this->load->view("about");
          $this->load->view("footer");
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
      $data['query'] = $this->JRH_Model->getAllService();
          $this->load->view("header");
          $this->load->view("services",$data);
          $this->load->view("footer");
    }
    public function installation()
    {
      $this->load->model("JRH_Model");
      $data['query'] = $this->JRH_Model->getAllService();
          $this->load->view("header");
          $this->load->view("installation",$data);
          $this->load->view("footer");
    }
    public function repair()
    {
          $this->load->view("header");
          $this->load->view("repair");
          $this->load->view("footer");
    }
    public function clean()
    {
          $this->load->view("header");
          $this->load->view("clean");
          $this->load->view("footer");
    }
    public function contact()
    {
          $this->load->view("header");
          $this->load->view("contact");
          $this->load->view("footer");
    }
 
}