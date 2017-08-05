<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
