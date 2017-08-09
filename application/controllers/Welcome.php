<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
   
    function __construct()
    {
       parent::__construct();
    }
   
    public function index()
    {
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
          $this->load->view("header");
          $this->load->view("services");
          $this->load->view("footer");
    }
    public function contact()
    {
          $this->load->view("header");
          $this->load->view("contact");
          $this->load->view("footer");
    }
 
}