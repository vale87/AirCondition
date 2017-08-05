<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {
   
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
    public function about()
    {
		  $this->load->view("header");
          $this->load->view("about");
          $this->load->view("footer");
    }
    public function services()
    {
		  $this->load->view("header");
          $this->load->view("services");
          $this->load->view("footer");
    }
 
}